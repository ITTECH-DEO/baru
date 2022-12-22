<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Session;


class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $tmp_file_path = "admin/images/about/";
        $file->move($tmp_file_path, $tmp_file_name);
        // if(move_uploaded_file($tmp_name, $tmp_file_path)){
        $result = 'admin/images/about' . '/' . $tmp_file_name;
        // }
        return $result;
    }
    public function indexWeb()
    {
        $about = About::orderBy('updated_at', 'DESC')->latest()->take(1)->get();
        // dd($about);
        Session::put('menu','whatsapp');
        return view('web.aboutUs', compact('about'));
    }

    public function indexAdm()
    {
        $about = About::orderBy('updated_at', 'DESC')->latest()->get();
        Session::put('menu','aboutUs');
        return view('dashboard.about', compact('about'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'about' => 'required',
        ]);
        // dd($request);
        // $image = 'image';
        $about = new About;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $tmp_file_path = "admin/images/about/";
            $file->move('admin/images/about', $ext);
            $about->image = $tmp_file_path.$ext;
        }
        $about->about = $request->about;
        // $about->image = $this->uploadFile($request, $image);
        $about->save();
        return redirect('aboutUsAdm')
            ->with('success', 'New data whatsapp successfully added!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'about' => 'required',
        ]);
        $image_file = $request->file('image');
        $image = 'image';

        $about = About::find($id);
        if ($image_file != null) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/about/";
                $file->move('admin/images/about', $ext);
                $about->image = $tmp_file_path.$ext;
            }
        } else {
            $about->image = $request->old_image;
        }
        $about->about = $request->about;
        $about->save();
        return redirect('aboutUsAdm')
            ->with('success', 'Data whatsapp successfully updated!');
    }

    public function delete($id)
    {
        About::find($id)->delete();
        return redirect('aboutUsAdm')
            ->with('success', 'Data whatsapp successfully deleted!');
    }
}
