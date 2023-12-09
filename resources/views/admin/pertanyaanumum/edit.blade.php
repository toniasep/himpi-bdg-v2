@extends('layouts.template')
@section('title')
Ubah Pertanyaan Umum
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Ubah Pertanyaan Umum</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container py-5 rounded border p-10 row">
            <form action="{{route('pertanyaanumum.update', $result['id'])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}  
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">No urut</label>
                        <input type="number" class="form-control  @error('nourut') is-invalid @enderror"
                            name="nourut" placeholder="Masukan nourut" required="" value="{{$result['nourut']}}"/>
                        @if ($errors->has('nourut'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('nourut') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                            name="judul" placeholder="Masukan judul" required="" value="{{$result['judul']}}"/>
                        @if ($errors->has('judul'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('judul') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Masukan deskripsi" required=""  cols="3" rows="3">{{$result['deskripsi']}}</textarea>
                        @if ($errors->has('deskripsi'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('deskripsi') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
        </div>
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('pertanyaanumum')}}"><i class="fa fa-arrow-left mr-2"></i> Kembali
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
