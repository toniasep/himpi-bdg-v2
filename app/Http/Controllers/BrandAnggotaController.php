<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Katalog;
use Illuminate\Http\Request;

class BrandAnggotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        //get id user login
        $id = auth()->user()->id;
        $katalog = Katalog::where('user_id',$id)->get();
        //get list id katalog
        $id_katalog = Katalog::where('user_id',$id)->pluck('id');
        //get list brand berdasarkan id katalog
        $result = Brand::whereIn('katalog_id',$id_katalog)->get();
        return view('anggota.brand.index', compact('result','katalog'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
         //validasi
         $this->validate($request, [
            'nama_brand' => 'required',
            'deskripsi_brand' => 'required',
            'logo_brand' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg|max:1048|required',
            'katalog_id' => 'required'
        ]);

        $file_uploaded = null; 
        $akun = new Brand;
        $akun->nama_brand = $request->nama_brand;
        $akun->deskripsi_brand = $request->deskripsi_brand;
        $akun->katalog_id = $request->katalog_id;

        if ($request->hasFile('logo_brand')) { 
            $path = 'public/image/brand'; 
            $logo_brand_name = 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)-Brand-' . time() . '.' . request()->logo_brand->getClientOriginalExtension(); 
            // $request->file('logo_brand')->storeAs($path, $logo_brand_name,['disk' => 'public_uploads']); 
            
            $request->logo_brand->move(public_path('image/brand'), $logo_brand_name);
            $file_uploaded = $logo_brand_name; 
            $akun->logo_brand = $file_uploaded;
        }
        $akun->save();

        return redirect()->route('brand-pengguna.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function show($id)
    {
        //
    }
   public function edit($id)
    {
        $result = Brand::where('id', $id)->first();
        //get id user login
        $id = auth()->user()->id;
        $katalog = Katalog::where('user_id',$id)->get();
        return view('anggota.brand.edit', compact('result', $result, 'katalog', $katalog));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_brand' => 'required',
            'deskripsi_brand' => 'required',
            'logo_brand' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg|max:1048',
            'katalog_id' => 'required'
        ]);
        $file_uploaded = null; 
        $akun = Brand::find($id);
        $akun->nama_brand = $request->nama_brand;
        $akun->deskripsi_brand = $request->deskripsi_brand;
        $akun->katalog_id = $request->katalog_id;

        if ($request->hasFile('logo_brand')) { 
            $path = 'public/image/brand'; 
            $logo_brand_name = 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)-Brand-' . time() . '.' . request()->logo_brand->getClientOriginalExtension(); 
            // $request->file('logo_brand')->storeAs($path, $logo_brand_name,['disk' => 'public_uploads']); 
            $request->logo_brand->move(public_path('image/brand'), $logo_brand_name);

            $file_uploaded = $logo_brand_name; 
            $akun->logo_brand = $file_uploaded;
        }
        $akun->save();

        return redirect()->route('brand-pengguna.index')->with(['message' => 'Data Pasien berhasil Di Update!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        $result = Brand::where('id', $id)->first();
        $result->delete();
        return redirect()->route('brand-pengguna.index')->with(['message' => 'Data Pasien berhasil Dihapus!', 'error' => 'success']);
    }
}
