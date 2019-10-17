<?php

namespace App\Http\Controllers\Company;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public  function addCar(){
        return view('sellers.add_car');
    }

//$table->string('model');
//$table->string('year');
//$table->string('fuel_capacity');
//$table->string('status');

    public function saveCar(Request $request){
        $car=new Car();
        $car->model=$request->model;
        $car->year=$request->year;
        $car->fuel_capacity=$request->fuel_capacity;
        $car->status='Active';

        if($car->save()){
            return redirect()->route('view_cars');
        }

    }
}
