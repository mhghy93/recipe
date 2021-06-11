@extends('layouts.layouts')

@section('content')
    <div class="container mt-2">
       <h1 class="font-weight-bolder">{{ $recipe->title }}</h1>
       <h5 class="text-muted font-weight-bolder mb-3">{{ $user->name }}</h5>
            <div class="card">
                <img 
                    src="{{ url($recipe->pic) }}" 
                    class="card-img-top img-fluid rounded-lg recipe-image" 
                    alt="{{ $recipe->title }}">
            </div>

            <div class="d-flex justify-content-between mt-5">    
                @if ($recipe->food_type == "non-veg")
                    <h3 class="font-weight-bolder text-danger">
                        <i class="fas fa-dot-circle"></i> {{ $recipe->food_type }}
                    </h3>
                @else
                    <h3 class="font-weight-bolder text-success">
                        <i class="fas fa-dot-circle"></i> {{ $recipe->food_type }}
                    </h3>
                @endif

                <h3 class="font-weight-bolder text-info">
                    <i class="fas fa-utensils"></i> {{ $category->category }}
                </h3>
                <h5>
                    <a 
                        class="like-btn" 
                        href="/like/{{ $recipe->id }}"
                        onclick="event.preventDefault();
                        document.getElementById('like-form').submit();">
                            <i class="fas fa-thumbs-up"></i> {{ count($likes) }}
                    </a>
                </h5>
                <form id="like-form" action="/like/{{ $recipe->id }}" method="POST" class="d-none">
                        @csrf
                </form>
            </div>
            <h1 class="font-weight-bolder mt-5">Ingredients</h1>    
            <ul class="ingredients-list">    
                @foreach (explode(',', $recipe->ingredients) as $ingredient)
                    <li>- {{ $ingredient }}</li>
                @endforeach
            </ul>
            <h1 class="font-weight-bolder mt-5">
                How to cook?
            </h1>
            <p class="cooking-instruction">
                {{ $recipe->description}}
            </p>
        </div>
@endsection
