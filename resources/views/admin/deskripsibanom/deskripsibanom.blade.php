@extends('layouts.template')
@section('title')
Sunting Halaman Badan Otonom
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Sunting Halaman Badan Otonom</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('deskripsibanom.update', $result['id'])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            {{-- START VISI --}}
            <div class="container py-5 rounded border p-10 mb-5 row">
                <div class="row">
                    <div class="col-12 mb-0">
                        <h1 class="text-dark fw-bolder mt-1  fs-2">Sunting Deskripsi Halaman Badan Otonom </h1>
                        <!--begin::Block-->
                        <div class="py-5">
                            <textarea name="k1" class="form-control" required="">{{$result['k1']}}</textarea>
                        </div>
                        <!--end::Block-->
                        @if ($errors->has('k1'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('k1') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{-- END VISI --}}
            <div class="d-flex flex-stack pt-8">
                <div class="">
                    <a class="btn btn-light" href="{{route('home')}}"><i class="fa fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                </div>
                <div class="">
                    <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset </button>
                    <button type="submit" class="btn btn-primary float-right ml-1"><i class="fa fa-check mr-2"></i>
                        Submit
                    </button>
                </div>
            </div>
    </div>
    </form>
</div>


@endsection

@section('js2')
@endsection
