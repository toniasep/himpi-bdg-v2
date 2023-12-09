@extends('layouts.template')
@section('title')
Ubah Data Tindakan
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Ubah Data Tindakan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container py-5 rounded border p-10 row">
            <form action="{{route('tindakan.update', $result['No_Registrasi'])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">ID_Perawat</label>

                        <input type="text" class="form-control" value="{{$result['ID_Perawat']}}"  name="ID_Perawat" value="" required="" />
                        @if ($errors->has('ID_Perawat'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('ID_Perawat') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-12 mb-10">
                        <label class="form-label">Nama Pasien</label>
                        <input type="text" class="form-control" value="{{$result['Nama_Pasien']}}"  name="Nama_Pasien" value="" required="" />
                        @if ($errors->has('Nama_Pasien'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('Nama_Pasien') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-12 mb-10">
                        <label class="form-label">Jam</label>
                        <input type="time" class="form-control" value="{{$result['Jam']}}"  name="Jam" value="" required="" />
                        @if ($errors->has('Jam'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('Jam') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-12 mb-10">
                        <label class="form-label">Diagnosa</label>
                        <input type="text" class="form-control" value="{{$result['Diagnosa']}}"  name="Diagnosa" value="" required="" />
                        @if ($errors->has('Diagnosa'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('Diagnosa') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-12 mb-10">
                        <label class="form-label">Tindakan_Keperawatan</label>
                        <input type="text" class="form-control" value="{{$result['Tindakan_Keperawatan']}}"  name="Tindakan_Keperawatan" value="" required="" />
                        @if ($errors->has('Tindakan_Keperawatan'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('Tindakan_Keperawatan') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-12 mb-10">
                        <label class="form-label">No_Ruang</label>
                        <input type="number" class="form-control" value="{{$result['No_Ruang']}}"  name="No_Ruang" value="" required="" />
                        @if ($errors->has('No_Ruang'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('No_Ruang') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-12 mb-10">
                        <label class="form-label">Keterangan</label>
                        <input type="text" class="form-control" value="{{$result['Keterangan']}}"  name="Keterangan" value="" required="" />
                        @if ($errors->has('Keterangan'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('Keterangan') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

        </div>
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('tindakan.index')}}"><i class="fa fa-arrow-left mr-2"></i> Kembali
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
@include('pluign.date-picker')