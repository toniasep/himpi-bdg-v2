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
                @if(count($errors)>0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
                @endif

                <div class="row">
                    <div class="col-lg-3 p-0">
                        <div class="col-3">
                            <label class="form-label">Foto</label>
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline  @error('photo') is-invalid @enderror"
                                data-kt-image-input="true"
                                style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                <!--begin::Image preview wrapper-->
                                {{-- <div class="image-input-wrapper w-125px h-125px" style="background-image: url(../assets/media/avatars/150-1.jpg)"></div> --}}
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ url('image/pengguna/' . $result["photo"]) }}')"></div>
                                {{-- <div class="image-input-wrapper w-125px h-125px"></div> --}}
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Ganti Foto">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->
                                <!--begin::Cancel button-->
                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>

                            <!--end::Image input-->
                        </div>
                        @if ($errors->has('photo'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                        @endif
                    </div>
                    {{-- end div image --}}
                    <div class="col-lg-9">
                        <div class="col-12 mb-6">
                            <label class="form-label">Hak Akses</label>
                            <select name="role" class="form-control  @error('role') is-invalid @enderror"
                                data-control="select2" data-placeholder="Pilih Role" required>
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
                        <div class="col-12 mb-10">
                            <label class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                name="name" value="{{$result['name']}}" placeholder="Masukan Nama Pengguna" required="" />
                            @if ($errors->has('name'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                            value="{{$result['email']}}" placeholder="Masukan Alamat Email" required="" />
                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">KTA</label>
                        <input type="text" class="form-control" name="kta"
                            value="{{$result['kta']}}" placeholder="Masukan KTA" required="" />
                        @if ($errors->has('kta'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('kta') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            name="password" value="" placeholder="Masukan Kata Sandi" />
                        @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>


        </div>
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('pengguna.index')}}"><i class="fa fa-arrow-left mr-2"></i>
                    Kembali
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
