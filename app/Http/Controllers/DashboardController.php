<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cars = Car::with('vendor')->orderBy('updated_at', 'DESC')->take(2)->get();
        return view('web.dashboard',compact('cars'));
    }
}
