@extends('layouts.template')
@section('title')
Sejarah
@endsection
@section('content')

<div class="card card">
    <div class="card-header">
        <h3 class="card-title">Sejarah</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container py-5 rounded border p-10 row">
            <form action="{{route('sejarah.update', $result['id'])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="">
                            <label class="form-label">Gambar Sejarah</label>
                        </div>
                        <div class="col-12">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline  @error('logo1') is-invalid @enderror"
                                data-kt-image-input="true"
                                style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" title="Ganti Foto">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="logo1" accept=".png, .jpg, .jpeg, .JPG" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->
                                <!--begin::Cancel button-->
                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>

                            <!--end::Image input-->
                        </div>
                        @if ($errors->has('logo'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <label class="form-label">deskripsi</label>
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
        <div class="d-flex flex-stack pt-8">
            <div class="">
                <a class="btn btn-light" href="{{route('home')}}"><i class="fa fa-arrow-left mr-2"></i>
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