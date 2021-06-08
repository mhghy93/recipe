<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        $user = User::findOrFail($recipe->user_id);
        $category = Category::findOrFail($recipe->category_id);
        return view('recipes.show', ['recipe' => $recipe, 'category' => $category, 'user' => $user]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('recipes.create', ['categories' => $categories]);
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

        return redirect('/recipes')->with('message', 'Recipe has been added');
    }

    public function edit(Request $request, $id) 
    {
        $recipe = Recipe::findOrFail($id);
        $categories = Category::all();
        if ($recipe->user_id == auth()->user()->id) {
            return view('recipes.edit', ['recipe' => $recipe, 'categories' => $categories]);
        } else {
            return redirect('/recipes');
        }
      
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'food_type' => 'required',
            'food_category' => 'required',
            'description' => 'required'
        ]);
    }

}
