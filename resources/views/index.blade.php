@extends('layouts.layouts')

@section('content')
    <div class="container">
        {{-- Most recent recipes --}}
        <h2 class="mt-5 font-weight-bold">Most Recent Recipes</h2>
        <div class="row mt-3">
            @foreach ($recentRecipes as $recipe)
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="/recipes/{{ $recipe->id }}">
                        <div class="card">
                            <img 
                                src="{{ url($recipe->pic) }}" 
                                class="card-img-top img-fluid rounded-lg recipe-images" 
                                alt="{{ $recipe->title }}">
                        </div>
                    </a>
                    <h2 class="font-weight-bolder mt-3">{{ $recipe->title }}</h2>
                    <div class="d-flex justify-content-between mt-3">    
                        @if ($recipe->food_type == "non-veg")
                            <h5 class="font-weight-bolder text-danger">
                                <i class="fas fa-dot-circle"></i> {{ $recipe->food_type }}
                            </h5>
                        @else
                            <h5 class="font-weight-bolder text-success">
                                <i class="fas fa-dot-circle"></i> {{ $recipe->food_type }}
                            </h5>
                        @endif
                    
                        <h5 class="text-info font-weight-bolder">
                            <i class="fas fa-utensils"></i> {{ $recipe->category->category }}
                        </h5>

                        <h5>
                            <i class="fas fa-thumbs-up"></i> {{ count($recipe->likes) }}
                        </h5> 
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Most Liked Recipes --}}
        <h2 class="mt-5 font-weight-bold">Most Liked Recipes</h2>
        <div class="row mt-5">
        </div>
    </div>
@endsection
  