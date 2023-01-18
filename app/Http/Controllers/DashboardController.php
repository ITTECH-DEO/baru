<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cars = Car::with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();
        $manual = Car::where("type_car","=","Manual")->with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();
        $matic = Car::where("type_car","=","Matic")->with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();

        // return $manual;
        return view('web.dashboard',compact('cars','manual','matic'));
    }

    
}
