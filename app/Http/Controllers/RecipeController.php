<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'pic' => 'required|mimes:jpg,png,jpeg|max:5048',
            'food_type' => 'required',
            'food_category' => 'required',
            'description' => 'required'
        ]);
        dd($request);
    }
}
