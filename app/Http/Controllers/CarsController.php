<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
    public function storeCar(Request $request) {
        $car = new Cars();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->save();

        return $car;
    }

    public function getCars(Request $request) {
        $cars = Cars::all();

        return $cars;
    }
    
    public function deleteCar(Request $request){
        $car = Cars::find($request->id)->delete();
    }

    public  function editCar(Request $request, $id){
        $car = Cars::where('id',$id)->first();

        $car->make = $request->get('val_1');
        $car->model = $request->get('val_2');
        $car->save();

        return $car;
    }
}
