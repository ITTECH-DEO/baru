<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        if (
            $request->has('search')
            || $request->has('min')
            || $request->has('max')
        ) {
            $carPriceMin = Car::min('day_price');
            $carPriceMax = Car::max('day_price');
            $cars = Car::where('name_car', 'LIKE', '%' . ($request->search ?? '') . '%')->whereBetween('day_price', [($request->min ?? $carPriceMin), ($request->max ?? $carPriceMax)])->with('vendor')->orderBy('updated_at', 'DESC')->get();
            // dd($cars);
        } else {
            $cars = Car::with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();
        }

        $banners = Banner::all();

        $manual = Car::where("type_car", "=", "Manual")->with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();
        $matic = Car::where("type_car", "=", "Matic")->with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();
        $banner = Banner::orderBy('updated_at', 'DESC')->latest()->get();


        // return $manual;
        return view('web.dashboard', compact('cars', 'manual', 'matic', 'banner', ));
    }

    public function mobilMatic()
    {
        $cars = Car::where("type_car", "=", "Matic")->get();
        return view("web.matic", ["cars" => $cars]);
    }

    public function mobilManual()
    {
        $cars = Car::where("type_car", "=", "Manual")->get();
        return view("web.manual", ["cars" => $cars]);
    }

    public function allCars()
    {
        $cars = Car::all();
        return view("web.allcars", ["cars" => $cars]);
    }

    public function search_products(Request $request)
    {

        $cars = Car::whereBetween('day_price', [(int)$request->left_value, (int) $request->right_value])->get();
        $returnHTML = view('web.search_result', compact('cars'))->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
        // return response()->json($cars);
        // return view('search_result', compact('cars'))->render();
    }

    public function sort_by(Request $request)
    {
        if ($request->sort_by == 'lowest_price') {
            $cars = Car::orderBy('day_price', 'asc')->get();
        }
        if ($request->sort_by == 'highest_price') {
            $cars = Car::orderBy('day_price', 'desc')->get();
        } else
            $cars = Car::with('vendor')->orderBy('updated_at', 'DESC')->take(6)->get();
        $returnHTML = view('web.search_result', compact('cars'))->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
        // return response()->json($cars);
        // return view('search_result', compact('cars'))->render();
    }
}
