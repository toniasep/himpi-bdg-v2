@extends('layouts.template')
@section('title')
Ubah Data Perawat Aktif
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Ubah Data Bidang Usaha</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container py-5 rounded border p-10 row">
            <form action="{{route('master_bidang_usaha.update', $result['id'])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">Bidang Usaha</label>
                            <input type="text" class="form-control" value="{{$result['bidang_usaha']}}" name="bidang_usaha" value="" required="" />
                            @if ($errors->has('bidang_usaha'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('bidang_usaha') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>                 
                </div>

        </div>
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('master_bidang_usaha.index')}}"><i class="fa fa-arrow-left mr-2"></i> Kembali
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