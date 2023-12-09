<?php

namespace App\Http\Controllers;
use App\Tindakan;
use App\Perawat;
use App\Brand;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $result = Tindakan::all();
        $perawat = Perawat::all();
        $brand = Pasien::all();
        return view('admin.tindakan.index', compact('result','perawat','pasien'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
         //validasi
         $this->validate($request, [
            'ID_Perawat' => 'required',
            'Nama_Pasien' => 'required',
            'Jam' => 'required',
            'Diagnosa' => 'required',
            'Tindakan_Keperawatan' => 'required',
            'No_Ruang' => 'required',
            'Keterangan' => 'required'
        ]);
        Tindakan::create([
            'ID_Perawat' => $request->ID_Perawat,
            'Nama_Pasien' => $request->Nama_Pasien,
            'Jam' => $request->Jam,
            'Diagnosa' => $request->Diagnosa,
            'Tindakan_Keperawatan' => $request->Tindakan_Keperawatan,
            'No_Ruang' => $request->No_Ruang,
            'Keterangan' => $request->Keterangan
        ]);
        return redirect()->route('tindakan.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function show($id)
    {
        //
    }
   public function edit($id)
    {
        $result = Tindakan::where('No_Registrasi', $id)->first();
        return view('admin.tindakan.edit', compact('result', $result));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ID_Perawat' => 'required',
            'Nama_Pasien' => 'required',
            'Jam' => 'required',
            'Diagnosa' => 'required',
            'Tindakan_Keperawatan' => 'required',
            'No_Ruang' => 'required',
            'Keterangan' => 'required'
        ]);
        Tindakan::where('No_Registrasi', $id)->update([
            'ID_Perawat' => $request->ID_Perawat,
            'Nama_Pasien' => $request->Nama_Pasien,
            'Jam' => $request->Jam,
            'Diagnosa' => $request->Diagnosa,
            'Tindakan_Keperawatan' => $request->Tindakan_Keperawatan,
            'No_Ruang' => $request->No_Ruang,
            'Keterangan' => $request->Keterangan
        ]);
        return redirect()->route('tindakan.index')->with(['message' => 'Data Tindakan berhasil Di Update!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        $result = Tindakan::where('No_Registrasi', $id)->first();
        $result->delete();
        return redirect()->route('tindakan.index')->with(['message' => 'Data Tindakan berhasil Dihapus!', 'error' => 'success']);
    }
    public function faqnonaktif(Request $request, $id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->tampil = '0';
        $tindakan->save();
        return redirect()->route('tindakan.index')->with(['message' => 'Data Tindakan berhasil Di Non Aktifkan!', 'error' => 'success']);
    }
    public function faqrestore(Request $request, $id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->tampil = '1';
        $tindakan->save();
        return redirect()->route('tindakan.index')->with(['message' => 'Data Tindakan berhasil Di Restore!', 'error' => 'success']);
    }
}
