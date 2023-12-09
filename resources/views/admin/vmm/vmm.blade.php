@extends('layouts.template')
@section('title')
Sunting Data Tentang Kami - Visi Misi Motto
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Sunting Data Tentang Kami - Visi Misi Motto</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('vmm.update', $result['id'])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            {{-- START VISI --}}
            <div class="container py-5 rounded border p-10 mb-5 row">
                <div class="row">
                    <div class="col-12 mb-0">
                        <h1 class="text-dark fw-bolder mt-1  fs-2">Sunting Visi </h1>
                        <!--begin::Block-->
                        <div class="py-5">
                            <textarea name="k1" id="kt_docs_ckeditor_classic" required="">
                                    {!!$result['k1']!!}
                                </textarea>
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

            {{-- START MISI --}}
            <div class="container py-5 rounded border p-10 mb-5 row">
                <div class="row">
                    <div class="col-12 mb-0">
                        <h1 class="text-dark fw-bolder mt-1  fs-2">Sunting Misi </h1>
                        <!--begin::Block-->
                        <div class="py-5">
                            <textarea name="k2" id="kt_docs_ckeditor_document" required="">
                                        {!!$result['k2']!!}
                                    </textarea>
                        </div>
                        <!--end::Block-->
                        @if ($errors->has('k2'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('k2') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{-- END MISI --}}

            {{-- START MOTTO --}}
            <div class="container py-5 rounded border p-10 mb-5 row">
                <div class="row">
                    <div class="col-12 mb-0">
                        <h1 class="text-dark fw-bolder mt-1  fs-2">Sunting Motto </h1>
                        <!--begin::Block-->
                        <div class="py-5">
                            <textarea name="k3" id="kt_docs_ckeditor_classic2" required="">
                                            {!!$result['k3']!!}
                                        </textarea>
                        </div>
                        <!--end::Block-->
                        @if ($errors->has('k3'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('k3') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{-- END MOTTO --}}
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
<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('assets/js/scripts.bundle.js')}}"></script>
<script src="{{url('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{url('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{url('assets/js/custom/documentation/documentation.js')}}"></script>
<script src="{{url('assets/js/custom/documentation/editors/ckeditor/classic.js')}}"></script>
<script>
    $('.addAttr').click(function () {
        var id = $(this).data('id');
        var satu = $(this).data('satu');
        var dua = $(this).data('dua');
        var tiga = $(this).data('tiga');
        var empat = $(this).data('empat');
        var created_at = $(this).data('created_at');
        var updated_at = $(this).data('updated_at');

        $('#satu').text(satu);
        $('#dua').text(dua);
        $('#tiga').text(tiga);
        $('#empat').text(empat);
        $('#created_at').text(created_at);
        $('#updated_at').text(updated_at);
    });

</script>
@endsection
