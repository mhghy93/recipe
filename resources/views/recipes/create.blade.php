@extends('layouts.profile')

@section('profile-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header lead">{{ __('Add Recipe') }}</div>
                <div class="card-body">
                    @if ($errors->any())
                       @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button 
                                    type="button" 
                                    class="close" 
                                    data-dismiss="alert" 
                                    aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="/recipes" enctype="multipart/form-data">
                        @csrf

                        {{-- Title --}}
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left">
                                <i class="fas fa-chalkboard"></i> {{ __('Title') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                    id="title" 
                                    placeholder="Title" 
                                    type="text" 
                                    class="form-control"  
                                    name="title" 
                                    value="{{ old('title') }}"
                                    autocomplete="title" 
                                    autofocus>
                            </div>
                        </div>

                        {{-- Ingredients --}}
                        <div class="form-group row">
                            <label for="ingredients" class="col-md-4 col-form-label text-md-left">
                                <i class="fas fa-chalkboard"></i> {{ __('Ingredients') }}
                            </label>

                            <div class="col-md-6">
                                <div class="d-flex justify-content-start">
                                    <input 
                                        id="ingredients" 
                                        placeholder="Ingredients" 
                                        type="text" 
                                        class="form-control"  
                                        name="ingredients" 
                                        value="{{ old('ingredients') }}"
                                        autocomplete="ingredients" 
                                        autofocus>
                                    <button 
                                        id="ingredientsButton" 
                                        class="btn btn-primary ml-2" 
                                        type="button">
                                        Add
                                    </button>
                                </div> 
                                <small class="form-text text-muted">
                                    Ingredients are seperated by comma
                                </small> 
                            </div>
                        </div>

                        {{-- Pic --}}
                        <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-user"></i> {{ __('Upload Photo') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                    type="file" 
                                    class="form-control-file" 
                                    id="pic" 
                                    name="pic" 
                                    value="{{ old('pic') }}"
                                    autocomplete="pic" 
                                    autofocus>
                            </div>
                        </div>

                        {{-- Food Type --}}
                        <div class="form-group row">
                            <label for="food_type" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-lemon"></i> {{ __('Food Type') }}
                            </label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="radio" 
                                        name="food_type" 
                                        id="veg" 
                                        value="veg"
                                        {{ old('food_type') == 'veg' ? 'checked' : '' }}
                                        autofocus>
                                    <label class="form-check-label" for="veg">
                                        Veg
                                    </label>
                                </div>
                               
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="radio" 
                                        name="food_type" 
                                        id="non-veg" 
                                        value="non-veg"
                                        {{ old('food_type') == 'non-veg' ? 'checked' : '' }}
                                        autofocus>
                                    <label class="form-check-label" for="non-veg">
                                        Non-Veg
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- Food Category --}}
                        <div class="form-group row">
                            <label for="food_category" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-lemon"></i> {{ __('Food Category') }}
                            </label>

                            <div class="col-md-6">
                                <select class="custom-select" id="food_category" name="food_category">
                                    <option selected disabled value="">Choose...</option>
                                    @foreach ($categories as $category)
                                        <option
                                            {{ old('food_category') == $category->id  ? 'selected' : '' }} 
                                            value="{{ $category->id }}">
                                            {{ $category->category }}
                                        </option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        {{-- Decription --}}
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-keyboard"></i> {{ __('Description') }}
                            </label>

                            <div class="col-md-6">
                                <textarea 
                                    id="description" 
                                    placeholder="Description..."
                                    rows="10" 
                                    class="form-control" 
                                    name="description" 
                                    autocomplete="description">{{ old('description')}}</textarea>   
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Recipe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
