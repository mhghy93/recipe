<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected static function get_liked_recipes_id($userRecipes)
    {
        $user_id_liked_by_others = array();

        foreach ($userRecipes as $recipe) {
            $user_id_liked_by_others[] = $recipe->id;
        }

        return $user_id_liked_by_others;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::findOrFail(auth()->user()->id);
        $recipes = Recipe::where('user_id', $user->id)->get();
        $likedRecipes = Like::where('user_id', $user->id)->get();
        return view('profile.show', [
            'user' => $user,
            'recipes' => $recipes,
            'likedRecipes' => $likedRecipes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('profile.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');

        $user = User::where('email', $email)->where('email', '!=', auth()->user()->email)->get();

        if (count($user) == 0) {
            User::where('id', auth()->user()->id)->update([
                'name' => $name,
                'email' => $email
            ]);
            return redirect('/profile')->with('message', 'Your profile has been updated');
        } else {
            return redirect('/profile/edit')->with('message', 'This email has already been taken');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $user_id = auth()->user()->id;

        $user = User::findOrFail($user_id);
        $userRecipes = Recipe::where('user_id', $user_id)->get();
        $recipesLikedByUser = Like::where('user_id', $user_id)->get();
        $user_id_liked_by_others = ProfileController::get_liked_recipes_id($userRecipes);
        $recipesLikedByOthers = Like::whereIn('recipe_id', $user_id_liked_by_others)->get(); 

        $recipesLikedByOthers->each->delete();
        $recipesLikedByUser->each->delete();
        $userRecipes->each->delete();
        $user->delete();

        Auth::logout();
        return redirect('/');

    }
}
