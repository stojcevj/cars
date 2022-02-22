@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <form method="POST" action="/{{$car[0]->id}}/edit">
            @method('PUT')
            @csrf
            <div class="row mb-3">
                <label for="car" class="col-md-4 col-form-label text-md-end">{{ __('Car') }}</label>
                <div class="col-md-6">
                    <input id="car" type="text" class="form-control" name="car" value="{{$car[0]->marka}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>
                <div class="col-md-6">
                    <input id="model" type="text" class="form-control" name="model" value="{{$car[0]->model}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('Year') }}</label>
                <div class="col-md-6">
                    <input id="year" type="text" class="form-control" name="year" value="{{$car[0]->godina}}">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
