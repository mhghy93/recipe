@extends('layouts.layouts')

@section('content')

<div class="container">
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show w-50 text-center" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row mt-5">
        @foreach ($recipes as $recipe)
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
                  
                    {{-- <h5>
                        <i class="fas fa-thumbs-up"></i> 0
                    </h5> --}}
                </div>
            </div>
        @endforeach
    </div>
       
</div>
    
@endsection
