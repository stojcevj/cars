@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card mb-3">
            <img src="{{asset('storage/' . $car[0]->image)}}" style="height: 500px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">{{$car[0]->marka}}</h2>
                    <h4 class="card-title">{{$car[0]->model}}</h4>
                    <h6 class="card-title">{{$car[0]->godina}}</h6>
                    <p class="card-text">This is a longer</p>
                </div>
        </div>
    </div>
@endsection

