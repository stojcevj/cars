@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="text-white bg-secondary bg-gradient card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container mt-3 mb-3">
                            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                                @foreach($cars as $car)
                                    <a href="{{$car->id}}/edit" style="text-decoration: none; color:black;">
                                        <div class="col">
                                            <div class="card">
                                                <img src="{{asset('storage/' . $car->image)}}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h2 class="card-title">{{$car->marka}}</h2>
                                                    <h4 class="card-title">{{$car->model}}</h4>
                                                    <h6 class="card-title">{{$car->godina}}</h6>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
