@extends('layouts.template-anggota')
@section('title')
Ubah Data Brand
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Ubah Data Brand</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container py-5 rounded border p-10 row">
            <form action="{{route('brand-pengguna.update', $result['id'])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">

                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">Nama Brand</label>
                            <input value="{{$result['nama_brand']}}" type="text" class="form-control" name="nama_brand"
                                required="" />
                            @if ($errors->has('nama_brand'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('nama_brand') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 mb-10">
                            <label class="form-label">Deskripsi Brand</label>
                            <textarea type="text" class="form-control" name="deskripsi_brand"
                                required="">{{$result['deskripsi_brand']}}</textarea>
                            @if ($errors->has('deskripsi_brand'))

                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('deskripsi_brand') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">Logo brand</label>
                            <input value="{{$result['logo_brand']}}" type="file" class="form-control" name="logo_brand"  accept="image*" />
                            @if ($errors->has('logo_brand'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('logo_brand') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">Katalog</label>
                            
                            <select  data-control="select2" class="form-select"  aria-label="Select example" name="katalog_id" required>
                                    @foreach($katalog as $data)
                                    <option value="{{$data['id']}}" @if($result['katalog_id'] == $data['id']) selected @endif>{{$data['nama_katalog']}} - {{$data['nama_pemilik']}} </option>
                                    @endforeach
                                </select>
                            @if ($errors->has('katalog_id'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('katalog_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>


        </div>
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('brand-pengguna.index')}}"><i class="fa fa-arrow-left mr-2"></i> Kembali
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
