@extends('layouts.template')
@section('title')
Ubah Data Pengguna
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Ubah Data Pengguna</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container py-5 rounded border p-10 row">
            <form action="{{route('pengguna.update', $result['id'])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}  
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">role</label>
                            <select name="role" class="form-control" required>
                                <option value="anggota" name="role" @if($result['role'] == 'anggota') selected @endif>Anggota</option>
                                <option value="admin" name="role" @if($result['role'] == 'admin') selected @endif>Admin</option>
                                <option value="pengurus" name="role" @if($result['role'] == 'pengurus') selected @endif>pengurus</option>
                            </select>
                            @if ($errors->has('role'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control" name="name"  required=""
                                value="{{$result['name']}}" />
                            @if ($errors->has('name'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">email</label>
                            <input type="email" class="form-control" name="email" required=""
                                value="{{$result['email']}}" />
                            @if ($errors->has('email'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control" name="password"/>
                            @if ($errors->has('password'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                </div>


        </div>
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('pengguna.index')}}"><i class="fa fa-arrow-left mr-2"></i> Kembali
                </a>
            </div>
            <div class="">
                <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset </button>
                <button type="submit" class="btn btn-primary float-right ml-1"><i class="fa fa-check mr-2"></i> Submit
                </button>
            </div>
        </div>
    </div>
    </form>
</div>


@endsection
