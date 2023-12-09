<?php

namespace App\Http\Controllers;
use App\Master_bidang_usaha;
use App\Bidang_usaha;
use App\User;
use App\Katalog;

use Illuminate\Http\Request;

class BidangusahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $master_bidang_usaha = Master_bidang_usaha::all();
        $katalog = Katalog::all();
        $users = User::all();
        $result = Bidang_usaha::all();
        return view('admin.bidang_usaha.index', compact('result', 'master_bidang_usaha', 'katalog', 'users'));
    }



    public function create()
    {
    }

    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'master_bidang_usaha_id' => 'required',
            'katalog_id' => 'required',
            'user_id' => 'required'
        ]);
        Bidang_usaha::create([
            'master_bidang_usaha_id' => $request->master_bidang_usaha_id,
            'katalog_id' => $request->katalog_id,
            'user_id' => $request->user_id

        ]);
        return redirect()->route('bidang_usaha.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }

    public function show($id)
    {
        //
    }
   public function edit($id)
    {
        $result = Bidang_usaha::where('id', $id)->first();
        return view('admin.bidang_usaha.edit', compact('result', $result));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'master_bidang_usaha_id' => 'required',
            'katalog_id' => 'required',
            'user_id' => 'required'
        ]);
        Bidang_usaha::where('id', $id)->update([
            'master_bidang_usaha_id' => $request->master_bidang_usaha_id,
            'katalog_id' => $request->katalog_id,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('bidang_usaha.index')->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
    }

    public function destroy($id)
    {
        $result = Bidang_usaha::where('id', $id)->first();
        $result->delete();
        return redirect()->route('bidang_usaha.index')->with(['message' => 'Data berhasil Dihapus!', 'error' => 'success']);
    }
}
