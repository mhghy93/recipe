@extends('layouts.profile')

@section('profile-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header lead">Edit Profile</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
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
                    <form method="POST" action="/profile/edit">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-user"></i> {{ __('Name') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                    id="name" 
                                    placeholder="Name" 
                                    type="text" 
                                    class="form-control" 
                                    name="name" 
                                    value="{{ $user->name }}" 
                                    autocomplete="name" 
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">
                                <i class="far fa-envelope"></i> {{ __('Email') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                    id="email" 
                                    type="email" 
                                    placeholder="Email" 
                                    class="form-control" 
                                    name="email" 
                                    value="{{ $user->email }}" 
                                    autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
