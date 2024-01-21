<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Cms_konten;
use App\Pertanyaanumum;
use App\Susunanpengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }
    public function sejarah($id)
    {
        $result = Cms_konten::where('id', $id)->first();
        return view('admin.sejarah.sejarah', compact('result', $result));
    }
    public function sejarahupdate(Request $request, $id)
    {
        $this->validate($request, [
            'logo1' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg',
            'k1'  => 'required',
        ]);
        $var = Cms_konten::find($id);
        if ($request->hasFile('logo1')) {
            $nameimage = 'HIPMI-Bandung-Sejarah-'.time().'.'.request()->logo1->getClientOriginalExtension();
            $request->logo1->storeAs('public',$nameimage,['disk' => 'public_uploads']);
            $oldback = $var->logo1;
            $var->logo1 = $nameimage;
        }
            $var->k1 = $request->k1;
            $var->save();
        return redirect()->back()->with(['message' => 'Data berhasil Di Sunting!', 'error' => 'success']);   
    }
    public function vmm($id)
    {
        $result = Cms_konten::where('id', $id)->first();
        return view('admin.vmm.vmm', compact('result', $result));
    }
    public function vmmupdate(Request $request, $id)
    {
        $this->validate($request, [
            'k1'  => 'required',
            'k2'  => 'required',
            'k3'  => 'required'
        ]);
            $var = Cms_konten::find($id);
            $var->k1 = $request->k1;
            $var->k2 = $request->k2;
            $var->k3 = $request->k3;
            $var->save();
        return redirect()->back()->with(['message' => 'Data berhasil Di Sunting!', 'error' => 'success']);   
    }
    public function strukturorganisasi()
    {
        $aktif = Susunanpengurus::where('kategori', 'aktif')->orderBy('nourut','asc')->get();
        $partner = Susunanpengurus::where('kategori', 'partner')->orderBy('nourut','asc')->get();
        $riwayat = Susunanpengurus::where('kategori', 'riwayat')->orderBy('nourut','asc')->get();
        return view('admin.strukturorganisasi.index', compact('aktif','partner','riwayat'));
    }
    public function strukturorganisasistore(Request $request)
    {
        $this->validate($request, [
            // 'jabatan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg',
            'nama' => 'required', 
            'kategori' => 'required', 
            'nourut' => 'required', 
        ]);
        $var = new Susunanpengurus;
        if ($request->hasFile('gambar')) {
            $nameimage = 'HIPMI-Pengurus-'.time().'.'.request()->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public',$nameimage,['disk' => 'public_uploads']);
            $var->gambar = $nameimage;
        }
        $var->jabatan = $request->jabatan;
        $var->nama = $request->nama;
        $var->kategori = $request->kategori;
        $var->nourut = $request->nourut;
        $var->periode = $request->periode;
        $var->save();
        return redirect()->back()->with('message','Data berhasil ditambahkan');
    }
    
    public function strukturorganisasiedit($id)
   {
       $result = Susunanpengurus::where('id', $id)->first();
       return view('admin.strukturorganisasi.edit', compact('result', $result));
   }
   public function strukturorganisasiupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg',
            'nama' => 'required', 
            'kategori' => 'required', 
            'nourut' => 'required', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $var = Susunanpengurus::find($id);
        if ($request->hasFile('gambar')) {
            $nameimage = 'HIPMI-Pengurus-'.time().'.'.request()->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public',$nameimage,['disk' => 'public_uploads']);
            $var->gambar = $nameimage;
        }
        $var->jabatan = $request->jabatan;
        $var->nama = $request->nama;
        $var->kategori = $request->kategori;
        $var->nourut = $request->nourut;
        $var->periode = $request->periode;
        $var->save();
        return redirect()->back()->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
    }
    public function strukturorganisasidestroy($id)
    {
        $var = Susunanpengurus::find($id);
        $var ->delete();
        return redirect()->back()->with('message','Data berhasil di hapus');
    }
    public function deskripsibanom($id)
    {
        $result = Cms_konten::where('id', $id)->first();
        return view('admin.deskripsibanom.deskripsibanom', compact('result', $result));
    }
    public function deskripsibanomupdate(Request $request, $id)
    {
        $this->validate($request, [
            'k1'  => 'required'
        ]);
            $var = Cms_konten::find($id);
            $var->k1 = $request->k1;
            $var->save();
        return redirect()->back()->with(['message' => 'Data berhasil Di Sunting!', 'error' => 'success']);   
    }
    public function regulasi($id)
    {
        $result = Cms_konten::where('id', $id)->first();
        return view('admin.regulasi.regulasi', compact('result', $result));
    }
    public function regulasiupdate(Request $request, $id)
    {
        $this->validate($request, [
            'k1'  => 'required',
            'k2'  => 'required',
            'k3'  => 'required',
            'k4'  => 'required'
        ]);
            $var = Cms_konten::find($id);
            $var->k1 = $request->k1;
            $var->k2 = $request->k2;
            $var->k3 = $request->k3;
            $var->k4 = $request->k4;
            $var->save();
        return redirect()->back()->with(['message' => 'Data berhasil Di Sunting!', 'error' => 'success']);   
    }
    public function pertanyaanumum()
    {
        $result = Pertanyaanumum::orderBy('nourut','asc')->get();
        return view('admin.pertanyaanumum.index', compact('result'));
    }
    public function pertanyaanumumcreate()
    {
        
    }

    public function pertanyaanumumstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'nourut' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('pertanyaanumum')
                ->withErrors($validator)
                ->withInput();
        }
        $akun = new Pertanyaanumum;
        $akun->judul = $request->judul;
        $akun->deskripsi = $request->deskripsi;
        $akun->nourut = $request->nourut;
        $akun->save();
        return redirect()->route('pertanyaanumum')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }
   public function pertanyaanumumedit($id)
   {
       $result = Pertanyaanumum::where('id', $id)->first();
       return view('admin.pertanyaanumum.edit', compact('result', $result));
   }
   public function pertanyaanumumupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'nourut' => 'required'
        ]);
        Pertanyaanumum::where('id',$id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nourut' => $request->nourut
        ]);
        return redirect()->route('pertanyaanumum')->with(['message' => 'Data berhasil di ubah!', 'error' => 'success']);
    }
    public function pertanyaanumumdestroy($id)
    {
        $result = Pertanyaanumum::where('id', $id)->first();
        $result->delete();
        return redirect()->route('pertanyaanumum')->with(['message' => 'Data berhasil Dihapus!', 'error' => 'success']);
    }

}
