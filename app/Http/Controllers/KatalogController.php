<?php

namespace App\Http\Controllers;
use App\Master_bidang_usaha;
use App\Bidang_usaha;
use App\User;
use App\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $master_bidang_usaha = Master_bidang_usaha::all();
        $users = User::all();
        $katalog = Katalog::all();
        $result = Katalog::all();
        return view('admin.katalog.index', compact('result', 'master_bidang_usaha', 'users','katalog'));
    }

    public function create()
    {
        $master_bidang_usaha = Master_bidang_usaha::all();
        $pengguna = User::where('role','anggota')->get();
        return view('admin.katalog.create',compact('master_bidang_usaha','pengguna'));
    }

    public function store(Request $request)
    {
        // dd($request->toArray());
        //validasi
        // $this->validate($request, [
        //     'nama_katalog' => 'required',
        //     'deskripsi' => 'required',
        //     'alamat' => 'required',
        //     'nama_pemilik' => 'required',
        //     'no_pemilik' => 'required',
        //     'email_pemilik' => 'required',
        //     'facebook' => 'max:255',
        //     'instagram' => 'max:255',
        //     'twitter' => 'max:255',
        //     'youtube' => 'max:255',
        //     'logo' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg|max:1048',
        //     'master_bidang_usaha_id' => 'required',
        //     'user_id' => 'required',
        //     'cv' => 'required'
        // ]);
        $file_uploaded = null; 
        $katalog = new Katalog;
        $katalog->nama_katalog = $request->nama_katalog;
        $katalog->deskripsi = $request->deskripsi;
        $katalog->alamat = $request->alamat;
        $katalog->nama_pemilik = $request->nama_pemilik;
        $katalog->no_pemilik = $request->no_pemilik;
        $katalog->email_pemilik = $request->email_pemilik;
        $katalog->facebook = $request->facebook;
        $katalog->instagram = $request->instagram;
        $katalog->twitter = $request->twitter;
        $katalog->youtube = $request->youtube;
        $katalog->master_bidang_usaha_id = $request->master_bidang_usaha_id;
        $katalog->user_id = $request->user_id;
        $katalog->kerjasama_count = $request->kerjasama_count;
        // $katalog->cv = $request->cv;
        if ($request->hasFile('cv')) { 
            $path = 'public/pdf/katalog'; 
            $cv_name = 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)' . time() . '.' . request()->cv->getClientOriginalExtension(); 
            // $request->file('cv')->storeAs($path, $cv_name,['disk' => 'public_uploads']); 
            $request->cv->move(public_path('pdf/katalog'), $cv_name);
            $file_uploaded = $cv_name; 
            $katalog->cv = $file_uploaded;
        } 
        if ($request->hasFile('logo')) { 
            $path = 'public/image/katalog'; 
            $logo_name = 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)' . time() . '.' . request()->logo->getClientOriginalExtension(); 
            // $request->file('logo')->storeAs($path, $logo_name,['disk' => 'public_uploads']); 
            $request->logo->move(public_path('image/katalog'), $logo_name);
            $file_uploaded = $logo_name; 
            $katalog->logo = $file_uploaded;
        }        
        $katalog->save();
        return redirect()->route('katalog.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function show($id)
    {
        //
    }
   public function edit($id)
    {
        $result = Katalog::where('id', $id)->first();
        $master_bidang_usaha = Master_bidang_usaha::all();
        $pengguna = User::where('role','anggota')->get();
        return view('admin.katalog.edit', compact('result', $result,'master_bidang_usaha', $master_bidang_usaha,'pengguna', $pengguna));
    }
    public function update(Request $request, $id)
    {
        // dd($request->toArray());
        // $validator = Validator::make($request->all(), [
        //     'nama_katalog' => 'required',
        //     'deskripsi' => 'required',
        //     'alamat' => 'required',
        //     'nama_pemilik' => 'required',
        //     'no_pemilik' => 'required',
        //     'email_pemilik' => 'required',
        //     'facebook' => 'max:255',
        //     'instagram' => 'max:255',
        //     'twitter' => 'max:255',
        //     'youtube' => 'max:255',
        //     'logo' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg|max:1048',
        //     'master_bidang_usaha_id' => 'required',
        //     'user_id' => 'required',
        //     'cv' => 'required'
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->route('katalog.edit', $id)
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // dd($request->nama_katalog);
            $file_uploaded = null; 
            $katalog = Katalog::find($id);
            $katalog->nama_katalog = $request->nama_katalog;
            $katalog->deskripsi = $request->deskripsi;
            $katalog->alamat = $request->alamat;
            $katalog->nama_pemilik = $request->nama_pemilik;
            $katalog->no_pemilik = $request->no_pemilik;
            $katalog->email_pemilik = $request->email_pemilik;
            $katalog->facebook = $request->facebook;
            $katalog->instagram = $request->instagram;
            $katalog->twitter = $request->twitter;
            $katalog->youtube = $request->youtube;
            $katalog->master_bidang_usaha_id = $request->master_bidang_usaha_id;
            $katalog->user_id = $request->user_id;
            $katalog->kerjasama_count = $request->kerjasama_count;
            
            // dd($katalog->toArray());
            if ($request->hasFile('cv')) { 
                $path = 'public/pdf/katalog'; 
                $cv_name = 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)' . time() . '.' . request()->cv->getClientOriginalExtension(); 
                // $request->file('cv')->storeAs($path, $cv_name,['disk' => 'public_uploads']); 
                $request->cv->move(public_path('pdf/katalog'), $cv_name);
                $file_uploaded = $cv_name; 
                $katalog->cv = $file_uploaded;
            } 
            if ($request->hasFile('logo')) { 
                $path = 'public/image/katalog'; 
                $logo_name = 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)' . time() . '.' . request()->logo->getClientOriginalExtension(); 
                // $request->file('logo')->storeAs($path, $logo_name,['disk' => 'public_uploads']);
                $request->logo->move(public_path('image/katalog'), $logo_name); 
                $file_uploaded = $logo_name; 
                $katalog->logo = $file_uploaded;
            }        
            $katalog->save();
        return redirect()->route('katalog.index')->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        $result = Katalog::where('id', $id)->first();
        $result->delete();
        return redirect()->route('katalog.index')->with(['message' => 'Data berhasil Dihapus!', 'error' => 'success']);
    }
}
