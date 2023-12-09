<?php

namespace App\Http\Controllers;
use App\Master_bidang_usaha;
use Illuminate\Http\Request;

class Master_bidang_usahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $result = Master_bidang_usaha::all();
        return view('admin.master_bidang_usaha.index', compact('result'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'bidang_usaha' => 'required',
        ]);
        Master_bidang_usaha::create([
            'bidang_usaha' => $request->bidang_usaha,

        ]);
        return redirect()->route('master_bidang_usaha.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function show($id)
    {
        //
    }
   public function edit($id)
    {
        $result = Master_bidang_usaha::where('id', $id)->first();
        return view('admin.master_bidang_usaha.edit', compact('result', $result));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bidang_usaha' => 'required',
        ]);
        Master_bidang_usaha::where('id', $id)->update([
            'bidang_usaha' => $request->bidang_usaha,
        ]);
        return redirect()->route('master_bidang_usaha.index')->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        $result = Master_bidang_usaha::where('id', $id)->first();
        $result->delete();
        return redirect()->route('master_bidang_usaha.index')->with(['message' => 'Data berhasil Dihapus!', 'error' => 'success']);
    }
}
