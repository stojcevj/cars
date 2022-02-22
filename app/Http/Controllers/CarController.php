<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarsList;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except' => ['index','show']]);
    }

    public function createindx(){
        return view('create');
    }

    public function index(){
        $result = CarsList::all();
        return view('index', [
            'result'=>$result
        ]);
    }
    public function create(Request $request){
        return CarsList::create([
            'marka' => $request->input('car'),
            'model' => $request->input('model'),
            'godina' => $request->input('year'),
            'user_id'=> Auth::user()->id
        ]);
    }

    public function show($id){
        $car = CarsList::where('id',$id)->get();
        if(sizeof($car) == 0)
            return $this->index();
        else {
            return view('view', [
                'car' => $car
            ]);
        }
    }
}
