@extends('layouts.profile') 
@section('profile-content')
<div class="container pt-3">
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show w-50 text-center" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="card bg-white shadow round h-100">
                <div class="card-body mx-3 my-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mb-2">
                            <img
                                width="50"
                                height="50"
                                src="https://res.cloudinary.com/mhghy93/image/upload/v1578161259/blank-profile-picture-973460_1280_xf4t0m.png"
                                class="rounded-circle"
                                alt="..."
                            />
                        </div>
                        <div class="col-md-4 col-sm-12 mb-2">
                            <div class="card-text">
                                <h5>{{ $user->name }}</h5>
                                <p class="text-muted">
                                    Member since <br> {{ date('d F Y', (strtotime($user->created_at))) }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-2">
                            <a href="" class="btn btn-success btn-block">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="card-text">
                            <h3 class="font-weight-bolder">{{ count($recipes) }}</h3>
                            <p class="text-muted font-weight-bolder">Recipes</p>
                        </div>

                        <div class="card-text">
                            <h3 class="font-weight-bolder">{{ count($likedRecipes) }}</h3>
                            <p class="text-muted font-weight-bolder">Liked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2">
            <div class="card text-center bg-success text-white h-100 shadow-lg">
                <div class="card-body">
                    <h1 class="font-weight-bolder">Recipes</h1>
                    <h4 class="display-4">
                        <i class="fas fa-utensils"></i> {{ count($recipes) }}
                    </h4>
                    <a href="#recipes" class="btn btn-outline-light btn-lg">View</a>
                </div>
            </div>          
        </div>

        <div class="col-md-3 mt-2">
            <div class="card text-center bg-info text-white h-100 shadow-lg">
                <div class="card-body">
                    <h1 class="font-weight-bolder">Liked Recipe</h1>
                    <h4 class="display-4">
                        <i class="fas fa-thumbs-up"></i> {{ count($likedRecipes) }}
                    </h4>
                    <a href="#likedRecipes" class="btn btn-outline-light btn-lg">View</a>
                </div>
            </div>          
        </div>
    </div>

    <hr class="mt-5 mb-5">

    <h1>My Recipes</h1>
    {{-- Table of recipes --}}
    @if (count($recipes) > 0)    
        <table id="recipes" class="table table-striped mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Pic</th>
                    <th scope="col">Created on</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recipes as $recipe)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $recipe->title }}</td>
                        <td>
                            <img 
                                width="50"
                                height="50"
                                class="img-thumbnail"
                                src="{{ url($recipe->pic) }}" 
                                alt="{{ $recipe->title }}">
                        </td>
                        <td>{{ date('d F Y', (strtotime($recipe->created_at))) }}</td>
                        <td>
                            <a href="/recipes/{{ $recipe->id }}/edit" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                        </td>
                        <td>
                            <form action="/recipes/{{ $recipe->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" name="deleteRecipe">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2 class="mt-5">No Recipes added</h2>
    @endif

    <h1 class="mt-5">Liked Recipes</h1>
    @if (count($likedRecipes) > 0)
        <table id="likedRecipes" class="table table-striped mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Pic</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($likedRecipes as $recipe)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $recipe->recipe->title }}</td>
                    <td>
                        <img 
                            width="50"
                            height="50"
                            class="img-thumbnail"
                            src="{{ url($recipe->recipe->pic) }}" 
                            alt="{{ $recipe->recipe->title }}">
                    </td>
                    <td>
                        <form 
                            id="dislike-form" 
                            action="/dislike/{{ $recipe->recipe->id }}" 
                            method="POST" 
                            >
                            @csrf
                            @method('delete') 
                            <button class="btn btn-danger">
                                <i class="fas fa-thumbs-down"></i> Dislike
                            </button>                     
                        </form>         
                    </td>       
                </tr>
            @endforeach
        </table>
    @else
        <h2 class="mt-5">No Recipes liked</h2>
    @endif
</div>
@endsection
