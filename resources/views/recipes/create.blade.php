@extends('layouts.layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header lead">{{ __('Add Recipe') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        {{-- Title --}}
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left">
                                <i class="fas fa-chalkboard"></i> {{ __('Title') }}
                            </label>

                            <div class="col-md-6">
                                <input id="title" placeholder="Title" type="text" class="form-control"  name="title" required autocomplete="title" autofocus>
                            </div>
                        </div>

                        {{-- Pic --}}
                        <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-user"></i> {{ __('Upload Photo') }}
                            </label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="pic" name="pic" required autocomplete="pic" autofocus>
                            </div>
                        </div>

                        {{-- Food Type --}}
                        <div class="form-group row">
                            <label for="foodtype" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-lemon"></i> {{ __('Food Type') }}
                            </label>

                            <div class="col-md-6 ml-3">
                                <input class="form-check-input" type="radio" name="veg" id="veg" value="veg" required autofocus checked>
                                <label class="form-check-label" for="veg">
                                    Veg
                                </label>

                                <br>

                                <input class="form-check-input" type="radio" name="non-veg" id="non-veg" value="non-veg" required autofocus>
                                <label class="form-check-label" for="non-veg">
                                    Non-Veg
                                </label>
                            </div>
                        </div>

                        {{-- Food Category --}}
                        <div class="form-group row">
                            <label for="food_category" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-lemon"></i> {{ __('Food Category') }}
                            </label>

                            <div class="col-md-6">
                                <select class="custom-select" id="food_category" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Mughlai</option>
                                    <option>North Indian</option>
                                    <option>South Indian</option>
                                    <option>Chinese</option>
                                </select>
                            </div>
                        </div>


                        {{-- Decription --}}
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-keyboard"></i> {{ __('Description') }}
                            </label>

                            <div class="col-md-6">
                                <textarea id="description" rows="10" class="form-control" name="description" required autocomplete="name" autofocus>  
                                </textarea>   
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
