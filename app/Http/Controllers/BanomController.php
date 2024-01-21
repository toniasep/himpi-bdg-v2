<?php

namespace App\Http\Controllers;
use App\Banom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BanomController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $result = Banom::all();
        return view('admin.banom.index', compact('result'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:1048',
            'judul'  => 'required',
            'deskripsi_pendek'  => 'required',
            'deskripsi'  => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('banom.index')
                ->withErrors($validator)
                ->withInput();
        }
        $file_uploaded = null; 
        $banom = new Banom;
        if ($request->hasFile('logo')) { 
            $path = 'public/image/banom'; 
            $logo_name = 'Badan-Otonom-HIPMI-Bandung-' . time() . '.' . request()->logo->getClientOriginalExtension(); 
            // $request->file('logo')->storeAs($path, $logo_name,['disk' => 'public_uploads']); 
            $request->logo->move(public_path('image/banom'), $logo_name);
            $file_uploaded = $logo_name; 
            $banom->logo = $file_uploaded;
            $banom->judul = $request->judul;
            $banom->deskripsi_pendek = $request->deskripsi_pendek;
            $banom->deskripsi = $request->deskripsi;
        }
        $banom->save();
        return redirect()->route('banom.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function show($id)
    {
        //
    }
   public function edit($id)
    {
        $result = Banom::where('id', $id)->first();
        return view('admin.banom.edit', compact('result', $result));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'logo'  => 'image|mimes:jpeg,png,jpg,JPG,gif,svg|max:1048',
            'judul'  => 'required',
            'deskripsi_pendek'  => 'required',
            'deskripsi'  => 'required',
        ]);
        $file_uploaded = null; 
        $banom = Banom::find($id);
        if ($request->hasFile('logo')) { 
            $path = 'public/image/banom'; 
            $logo_name = 'Badan-Otonom-HIPMI-Bandung-' . time() . '.' . request()->logo->getClientOriginalExtension(); 
            // $request->file('logo')->storeAs($path, $logo_name,['disk' => 'public_uploads']); 
            $request->logo->move(public_path('image/banom'), $logo_name);
            $file_uploaded = $logo_name; 
            $banom->logo = $file_uploaded;
        }
        $banom->judul = $request->judul;
        $banom->deskripsi_pendek = $request->deskripsi_pendek;
        $banom->deskripsi = $request->deskripsi;
        $banom->save();
        return redirect()->route('banom.index')->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        $result = Banom::where('id', $id)->first();
        $result->delete();
        return redirect()->route('banom.index')->with(['message' => 'Data berhasil Dihapus!', 'error' => 'success']);
    }
}
