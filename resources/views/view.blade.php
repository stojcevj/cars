@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                    <div class="col">
                        <div class="card">
                                <img src="{{asset('storage/' . $car[0]->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">{{$car[0]->marka}}</h2>
                                <h4 class="card-title">{{$car[0]->model}}</h4>
                                <h6 class="card-title">{{$car[0]->godina}}</h6>
                                <p class="card-text">This is a longer jovan</p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection

