<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Activity_log;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $result = User::all();
        $log = Activity_log::all();
        // $query= DB::table('users')
        //         ->join('users', 'users.id', '=', 'users.id')
        //         ->select('users.*', 'users.name')
        //         ->get();
        // dd($query->toArray());
        return view('admin.pengguna.index', compact('result','log'));
        // $akun = User::where('role', '=', 'anggota')->orWhere('role', '=', 'pengurus')->get();
        // $bapel = User::orWhere('role', '=', 'admin')->get();
        // return view('admin.akun.index', compact('akun', 'bapel'));
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required|unique:users|max:255',
            'password' => 'required|min:8',
            'role' => 'required',
            'name' => 'required|max:100',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048'
        ]);
        if ($validator->fails()) {
            return redirect()->route('pengguna.index')
                ->withErrors($validator)
                ->withInput();
        }
        $file_uploaded = null; 
        $akun = new User;
        $akun->name = $request->name;
        $akun->email = $request->email;
        $akun->email_verified_at = now();
        $akun->password = Hash::make($request->password);
        $akun->role = $request->role;
        if ($request->hasFile('photo')) { 
            $path = 'public/image/pengguna'; 
            $photo_name = 'pengguna-' . time() . '.' . request()->photo->getClientOriginalExtension(); 
            $request->file('photo')->storeAs($path, $photo_name,['disk' => 'public_uploads']); 
            $file_uploaded = $photo_name; 
            $akun->photo = $file_uploaded;
        }
        $akun->save();

        return redirect()->route('pengguna.index')->with(['message' => 'Data berhasil Ditambah!', 'error' => 'success']);
    }
   public function edit($id)
   {
       $result = User::where('id', $id)->first();
       return view('admin.pengguna.edit', compact('result', $result));
   }
   public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required|max:255',
            'role' => 'required',
            'name' => 'required|max:100',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048'
        ]);
        if ($validator->fails()) {
            return redirect()->route('pengguna.index')
                ->withErrors($validator)
                ->withInput();
        }
        $file_uploaded = null; 
        $akun = User::find($id);
        $akun->name = $request->name;
        $akun->email = $request->email;
        $akun->password = Hash::make($request->password);
        $akun->role = $request->role;
        if ($request->hasFile('photo')) { 
            $path = 'public/image/pengguna'; 
            $photo_name = 'pengguna-' . time() . '.' . request()->photo->getClientOriginalExtension(); 
            $request->file('photo')->storeAs($path, $photo_name,['disk' => 'public_uploads']); 
            $file_uploaded = $photo_name; 
            $akun->photo = $file_uploaded;
        }
        $akun->save();
        return redirect()->route('pengguna.index')->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
        
        
    }
    public function destroy($id)
    {
        $result = User::where('id', $id)->first();
        $result->delete();
        return redirect()->route('pengguna.index')->with(['message' => 'Data Pengguna berhasil Dihapus!', 'error' => 'success']);
    }
    public function home()
    {
        return view('admin.index');
    }

    public function edit_akun()
   {
        //get id user login
        $id = auth()->user()->id;
       $result = User::where('id', $id)->first();
       return view('anggota.akun.edit', compact('result', $result));
   }
   public function update_akun(Request $request, $id)
   {
       $validator = Validator::make($request->all(), [
           'email' => 'email|required|max:255',
           'role' => 'required',
           'name' => 'required|max:100',
           'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048'
       ]);
       if ($validator->fails()) {
           return redirect()->route('anggota.edit_akun')
               ->withErrors($validator)
               ->withInput();
       }
       $file_uploaded = null; 
       $akun = User::find($id);
       $akun->name = $request->name;
       $akun->email = $request->email;
       $akun->password = Hash::make($request->password);
       $akun->role = $request->role;
       if ($request->hasFile('photo')) { 
           $path = 'public/image/pengguna'; 
           $photo_name = 'pengguna-' . time() . '.' . request()->photo->getClientOriginalExtension(); 
        //    $request->file('photo')->storeAs($path, $photo_name,['disk' => 'public_uploads']);
            $request->photo->move(public_path('image/pengguna'), $photo_name);
           $file_uploaded = $photo_name; 
           $akun->photo = $file_uploaded;
       }
       $akun->save();
       return redirect()->route('anggota.edit_akun')->with(['message' => 'Data berhasil Di Update!', 'error' => 'success']);
   }

}
