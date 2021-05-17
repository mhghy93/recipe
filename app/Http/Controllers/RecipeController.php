<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('recipes.create', [ 'categories' => $categories ]);
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
        // $imagePath = $request->file('pic')->store('images');
        // // dd($request->all());
        // $request->file('pic')->move(public_path('images'), $imagePath);
        // dd($imagePath);
    }
}
