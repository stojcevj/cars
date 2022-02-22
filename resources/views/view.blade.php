@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('img/merc.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">{{$car[0]->marka}}</h2>
                                <h4 class="card-title">{{$car[0]->model}}</h4>
                                <h6 class="card-title">{{$car[0]->godina}}</h6>
                                <p class="card-text">JOCI This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection

