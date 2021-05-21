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
            'ingredients' => 'required',
            'pic' => 'required|mimes:jpg,png,jpeg|max:5048',
            'food_type' => 'required',
            'food_category' => 'required',
            'description' => 'required'
        ]);
        $imagePath = $request->file('pic')->store('images');
        $request->file('pic')->move(public_path('images'), $imagePath);

        Recipe::create([
            'title' => $request->input('title'),
            'ingredients' => $request->input('ingredients'),
            'description' => $request->input('description'),
            'pic' => $imagePath,
            'food_type' => $request->input('food_type'),
            'category_id' => $request->input('food_category'),
            'user_id' => auth()->user()->id,
        ]);
    }
}
