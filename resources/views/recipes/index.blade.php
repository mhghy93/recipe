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
    <h1 class="text-center">Recipes</h1>
</div>
    
@endsection
