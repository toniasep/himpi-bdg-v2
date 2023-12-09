<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Activity_log;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $result = Slider::all();
        $log = Activity_log::all();
        return view('admin.slider.index', compact('result','log'));
        
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048'
        ]);
        if ($validator->fails()) {
            return redirect()->route('slider.index')
                ->withErrors($validator)
                ->withInput();
        }
        $file_uploaded = null; 
        $akun = new Slider;
        if ($request->hasFile('gambar')) { 
            $path = 'public/image/slider'; 
            $gambar_name = 'slider-' . time() . '.' . request()->gambar->getClientOriginalExtension(); 
            $request->file('gambar')->storeAs($path, $gambar_name,['disk' => 'public_uploads']); 
            $file_uploaded = $gambar_name; 
            $akun->gambar = $file_uploaded;
        }
        $akun->save();
        return redirect()->route('slider.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }
   public function edit($id)
   {
       $result = Slider::where('id', $id)->first();
       return view('admin.slider.edit', compact('result', $result));
   }
   public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        $result = Slider::where('id', $id)->first();
        $result->delete();
        return redirect()->route('slider.index')->with(['message' => 'Data slider berhasil Dihapus!', 'error' => 'success']);
    }

}
