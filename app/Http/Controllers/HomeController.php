<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recentRecipes = Recipe::orderBy('created_at', 'desc')->limit(3)->get();
        $mostLikedRecipes = Recipe::withCount('likes')->orderBy('likes_count', 'desc')->limit(3)->get();
        return view('index', ['recentRecipes' => $recentRecipes, 'mostLikedRecipes' => $mostLikedRecipes]);
    }
}
