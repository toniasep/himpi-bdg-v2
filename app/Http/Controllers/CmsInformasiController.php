<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cms_informasi;

class CmsInformasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $result = Cms_informasi::all();
        return view('DIKRJP.cms_informasi.index',compact('result'));
    }

    public function store(Request $request)

    {
        $this->validate($request, [
            'nama_aplikasi' => 'required',
            'nama_institusi' => 'required',
            'singkatan_nama_institusi' => 'required',
            'nama_daerah' => 'required',
            'logo' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        $var = new Cms_informasi;
        $var->nama_aplikasi = $request->nama_aplikasi;
        $var->nama_institusi = $request->nama_institusi;
        $var->singkatan_nama_institusi  = $request->singkatan_nama_institusi;
        $var->nama_daerah  = $request->nama_daerah ;
        $var->logo  = $request->logo ;
        $var->alamat  = $request->alamat ;
        $var->telepon  = $request->telepon ;
        $var->email  = $request->email ;
        $var->save();

        return redirect()->back()->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function edit($id)
    {
        $result = Cms_informasi::find($id);
        return view('DIKRJP.cms_informasi.edit',compact('result'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama_aplikasi' => 'required',
            'nama_institusi' => 'required',
            'singkatan_nama_institusi' => 'required',
            'nama_daerah' => 'required',
            'logo' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        $var = Cms_informasi::find($id);
        $var->nama_aplikasi = $request->nama_aplikasi;
        $var->nama_institusi = $request->nama_institusi;
        $var->singkatan_nama_institusi  = $request->singkatan_nama_institusi;
        $var->nama_daerah  = $request->nama_daerah ;
        $var->logo  = $request->logo ;
        $var->alamat  = $request->alamat ;
        $var->telepon  = $request->telepon ;
        $var->email  = $request->email ;
        $var->save();

        return redirect()->route('cms-informasi.index')->with(['message' => 'Data berhasil Diedit!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        Cms_informasi::destroy($id);
        return redirect()->back()->with(['message' => 'Data berhasil Dihapus!', 'error' => 'success']);
    }
    
}
