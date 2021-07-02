<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $recipes = Recipe::where('title', 'like', '%' . $query . '%')
        ->orWhere('ingredients', 'like', '%' . $query . '%')
        ->orWhere('description', 'like', '%' . $query . '%')
        ->orWhere('food_type', 'like', '%' . $query . '%')
        ->get();

        return view('search.index', ['recipes' => $recipes]);
    }
}
