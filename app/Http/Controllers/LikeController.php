<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Recipe;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);
        $likes = Like::where('recipe_id', $recipe_id)->where('user_id', auth()->user()->id)->first();

        /** Prevents a user from liking its own recipe as well as liking a recipe more than once */
        if (($recipe->user_id != auth()->user()->id) and ($likes === null)) {
            Like::create([
                'recipe_id' => $recipe_id,
                'user_id' => auth()->user()->id,
                'like' => true
            ]);
            return back();
        } else {
            return back();
        }
    }

    public function dislike($recipe_id)
    {
        $like = Like::where('recipe_id', $recipe_id)->where('user_id', auth()->user()->id);

        $like->delete();
        return redirect('/profile')->with('message', 'Recipe has been disliked');
    }
}
