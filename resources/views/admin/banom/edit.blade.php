@extends('layouts.template')
@section('title')
    Ubah Data Banom
@endsection
@section('content')
    <div class="card card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Banom</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container py-5 rounded border p-10 row">
                <form action="{{ route('banom.update', $result['id']) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-lg-12 p-4">
                            <label class="form-label">Gambar</label>
                            <div class="col-12">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline  @error('logo') is-invalid @enderror"
                                    data-kt-image-input="true"
                                    style="background-image: url('{{ asset('image/banom') }}/{{ $result['logo'] }}')">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                        title="Ganti Foto">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg, .JPG" required="" />
                                        <input type="hidden" name="avatar_remove" required="" />
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
                            @if ($errors->has('logo'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- end div image --}}
                    </div>
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">judul</label>
                            <input type="text" class="form-control" name="judul" value="{{ $result['judul'] }}"
                                required="" />
                            @if ($errors->has('judul'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('judul') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">Deskripsi Pendek</label>
                            <textarea name="deskripsi_pendek"class="form-control" cols="10" rows="3" required>{{ $result['deskripsi_pendek'] }}</textarea>
                            @if ($errors->has('deskripsi_pendek'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('deskripsi_pendek') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">deskripsi</label>
                            <!--begin::Block-->
                            <div class="py-5">
                                <textarea name="deskripsi" id="kt_docs_ckeditor_classic" required="">{!! $result['deskripsi'] !!}</textarea>
                            </div>
                            <!--end::Block-->
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
                    <a class="btn btn-light" href="{{ route('banom.index') }}"><i class="fa fa-arrow-left mr-2"></i>
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
@include('pluign.data-table')
@section('js2')
    <script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ url('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ url('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ url('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ url('assets/js/custom/documentation/editors/ckeditor/classic.js') }}"></script>
@endsection
