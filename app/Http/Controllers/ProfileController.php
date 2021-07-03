<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recipe;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
