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
        CarsList::create([
            'marka' => $request->input('car'),
            'model' => $request->input('model'),
            'godina' => $request->input('year'),
            'user_id'=> Auth::user()->id
        ]);
        return redirect('/home');
    }

    public function show($id){
        $car = CarsList::where('id',$id)->get();
        if(sizeof($car) == 0)
            return redirect('/');
        else {
            return view('view', [
                'car' => $car
            ]);
        }
    }

    public function edit($id){
        $car = CarsList::where('id', $id)->get();
        if(sizeof($car) == 0)
            return redirect('/');
        else {
            if(Auth::user()->id == $car[0]->user_id){
                return view('edit', [
                    'car' => $car
                ]);
            }else
                return redirect('/');
        }
    }

    public function update($id, Request $request){
        CarsList::where('id', $id)
            ->update([
                'marka' => $request->input('car'),
                'model' => $request->input('model'),
                'godina' => $request->input('year'),
        ]);
        return redirect('/home');
    }
}
