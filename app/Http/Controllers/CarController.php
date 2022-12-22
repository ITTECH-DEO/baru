<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Whatsapp;
use Session;
use PDF;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function uploadFile(Request $request, $oke)
    {
        $result = '';
        $file = $request->file($oke);
        $name = $file->getClientOriginalName();
        // $tmp_name = $file['tmp_name'];

        $extension = explode('.', $name);
        $extension = strtolower(end($extension));

        $key = rand() . '-' . $oke;
        $tmp_file_name = "{$key}.{$extension}";
        $tmp_file_path = "admin/images/cars/";
        $file->move($tmp_file_path, $tmp_file_name);
        // if(move_uploaded_file($tmp_name, $tmp_file_path)){
        $result = 'admin/images/cars' . '/' . $tmp_file_name;
        // }
        return $result;
    }

    public function index()
    {
        $whatsapp = Whatsapp::all();
        $status = Status::all();
        $cars = Car::with('vendor')->get();
        $vendors = Vendor::all();
        Session::put('menu', 'cars');
        return view('dashboard.cars', compact('cars', 'vendors', 'status', 'whatsapp'));
    }

    public function create(Request $request)
    {
        $img_car = 'img_car';
        $img_car2 = 'img_car2';
        $img_car3 = 'img_car3';
        $img_car4 = 'img_car4';
        $img_car_lainnya = 'img_car_lainnya';
        $img_car_lainnya2 = 'img_car_lainnya2';
        $img_car_lainnya3 = 'img_car_lainnya3';
        $img_car_lainnya4 = 'img_car_lainnya4';

        $car = new Car;
        $car->name_car = $request->name_car;
        $car->type_car = $request->type_car;
        $car->doors = $request->doors;
        $car->seats = $request->seats;
        $car->vendor_id = $request->vendor_id;
        $car->img_car = $this->uploadFile($request, $img_car);
        $car->img_car2 = $this->uploadFile($request, $img_car2);
        $car->img_car3 = $this->uploadFile($request, $img_car3);
        $car->img_car4 = $this->uploadFile($request, $img_car4);
        if ($request->hasFile('img_car_lainnya')) {
            $file = $request->file('img_car_lainnya');
            $ext = $file->getClientOriginalName();
            $tmp_file_path = "admin/images/cars/";
            $file->move('admin/images/cars', $ext);
            $car->img_car_lainnya = $tmp_file_path.$ext;
        }
        if ($request->hasFile('img_car_lainnya2')) {
            $file = $request->file('img_car_lainnya2');
            $ext = $file->getClientOriginalName();
            $tmp_file_path = "admin/images/cars/";
            $file->move('admin/images/cars', $ext);
            $car->img_car_lainnya2 = $tmp_file_path.$ext;
        }
        if ($request->hasFile('img_car_lainnya3')) {
            $file = $request->file('img_car_lainnya3');
            $ext = $file->getClientOriginalName();
            $tmp_file_path = "admin/images/cars/";
            $file->move('admin/images/cars', $ext);
            $car->img_car_lainnya3 = $tmp_file_path.$ext;
        }
        if ($request->hasFile('img_car_lainnya4')) {
            $file = $request->file('img_car_lainnya4');
            $ext = $file->getClientOriginalName();
            $tmp_file_path = "admin/images/cars/";
            $file->move('admin/images/cars', $ext);
            $car->img_car_lainnya4 = $tmp_file_path.$ext;
        }
        $car->day_price = $request->day_price;
        $car->model = $request->model;
        $car->fisrt_registartion = $request->fisrt_registartion;
        $car->fuel = $request->fuel;
        $car->engine_size = $request->engine_size;
        $car->power = $request->power;
        $car->color = $request->color;
        $car->millage = $request->millage;
        $car->status_id = $request->status;
        $car->whatsapp_id = $request->whatsapp;
        $car->save();
        return redirect('cars')
            ->with('success', 'Data car successfully added!');
    }

    public function update(Request $request, $id)
    {
        $img_car_file = $request->file('img_car');
        $img_car = 'img_car';
        $img_car_file2 = $request->file('img_car2');
        $img_car2 = 'img_car2';
        $img_car_file3 = $request->file('img_car3');
        $img_car3 = 'img_car3';
        $img_car_file4 = $request->file('img_car4');
        $img_car4 = 'img_car4';

        $img_car_file_lainnya = $request->file('img_car_lainnya');
        $img_car_lainnya = 'img_car_lainnya';
        $img_car_file_lainnya2 = $request->file('img_car_lainnya2');
        $img_car_lainnya2 = 'img_car_lainnya2';
        $img_car_file_lainnya3 = $request->file('img_car_lainnya3');
        $img_car_lainnya3 = 'img_car_lainnya3';
        $img_car_file_lainnya4 = $request->file('img_car_lainnya4');
        $img_car_lainnya4 = 'img_car_lainnya4';

        $car = Car::find($id);
        $car->name_car = $request->name_car;
        $car->type_car = $request->type_car;
        $car->vendor_id = $request->vendor_id;
        $car->doors = $request->doors;
        $car->seats = $request->seats;
        if ($img_car_file != null) {
            $car->img_car = $this->uploadFile($request, $img_car);
        } else {
            $car->img_car = $request->old_img_car;
        }
        if ($img_car_file2 != null) {
            $car->img_car2 = $this->uploadFile($request, $img_car2);
        } else {
            $car->img_car2 = $request->old_img_car2;
        }
        if ($img_car_file3 != null) {
            $car->img_car3 = $this->uploadFile($request, $img_car3);
        } else {
            $car->img_car3 = $request->old_img_car3;
        }
        if ($img_car_file4 != null) {
            $car->img_car4 = $this->uploadFile($request, $img_car4);
        } else {
            $car->img_car4 = $request->old_img_car4;
        }
        if ($img_car_file_lainnya != null) {
            if ($request->hasFile('img_car_lainnya')) {
                $file = $request->file('img_car_lainnya');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $car->img_car_lainnya = $tmp_file_path.$ext;
            }
        } else {
            $car->img_car_lainnya = $request->old_img_car_lainnya;
        }
        if ($img_car_file_lainnya2 != null) {
            if ($request->hasFile('img_car_lainnya2')) {
                $file = $request->file('img_car_lainnya2');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $car->img_car_lainnya2 = $tmp_file_path.$ext;
            }
        } else {
            $car->img_car_lainnya2 = $request->old_img_car_lainnya2;
        }
        if ($img_car_file_lainnya3 != null) {
            if ($request->hasFile('img_car_lainnya3')) {
                $file = $request->file('img_car_lainnya3');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $car->img_car_lainnya3 = $tmp_file_path.$ext;
            }
        } else {
            $car->img_car_lainnya3 = $request->old_img_car_lainnya3;
        }
        if ($img_car_file_lainnya4 != null) {
            if ($request->hasFile('img_car_lainnya4')) {
                $file = $request->file('img_car_lainnya4');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $car->img_car_lainnya4 = $tmp_file_path.$ext;
            }
        } else {
            $car->img_car_lainnya4 = $request->old_img_car_lainnya4;
        }
        $car->day_price = $request->day_price;
        $car->model = $request->model;
        $car->fisrt_registartion = $request->fisrt_registartion;
        $car->fuel = $request->fuel;
        $car->engine_size = $request->engine_size;
        $car->power = $request->power;
        $car->color = $request->color;
        $car->millage = $request->millage;
        $car->status_id = $request->status;
        $car->whatsapp_id = $request->whatsapp;
        $car->save();
        return redirect('cars')
            ->with('success', 'Data car successfully updated!');
    }

    public function delete($id)
    {
        Car::find($id)->delete();
        return redirect('cars')
            ->with('success', 'Data car successfully deleted!');
    }

    public function pdf($id)
    {
        $cars = Car::where('id', $id)->get();
        $pdf = PDF::loadview('dashboard.pdf', compact('cars'));
        return $pdf->stream();
        // return view('dashboard.pdf',compact('cars'));
    }
}
