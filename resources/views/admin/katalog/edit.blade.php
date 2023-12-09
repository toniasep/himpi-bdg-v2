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
                <form action="{{ route('katalog.update', $result['id']) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Logo Katalog <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline  @error('photo') is-invalid @enderror"
                                data-kt-image-input="true"
                                style="background-image: url('{{ url('storage/image/katalog') }}/{{ $result['logo'] }}')">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Ganti Foto">
                                    <i class="bi bi-pencil-fill fs-6"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
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
                            <div class="form-text">format gambar : png, jpg, jpeg.</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Katalog</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="nama_katalog"
                                class="form-control form-control-lg form-control-solid" placeholder="Nama Katalog"
                                value="{{ $result['nama_katalog'] }}" required />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Deskripsi Katalog</label>
                        <div class="col-lg-8 fv-row">
                            <textarea type="text" name="deskripsi" class="form-control form-control-lg form-control-solid"
                                placeholder="Deskripsi Katalog" cols="2" rows="2" required />{{ $result['deskripsi'] }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat </label>
                        <div class="col-lg-8 fv-row">
                            <textarea type="text" name="alamat" class="form-control form-control-lg form-control-solid" placeholder="Alamat "
                                cols="2" rows="2" required />{{ $result['alamat'] }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Katalog </label>
                        <div class="col-lg-8">
                            <select data-control="select2" class="form-select" aria-label="Pilih Opsi"
                                name="master_bidang_usaha_id" required>
                                @foreach ($master_bidang_usaha as $data)
                                    <option value="{{ $data['id'] }}" @if ($data['id'] == $result['master_bidang_usaha_id']) selected @endif>
                                        {{ $data['bidang_usaha'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Pengguna </label>
                        <div class="col-lg-8">
                            <select data-control="select2" class="form-select" aria-label="Pilih Opsi" name="user_id"
                                required>
                                @foreach ($pengguna as $data)
                                    <option value="{{ $data['id'] }}" @if ($data['id'] == $result['user_id']) selected @endif>
                                        {{ $data['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">CV Perusahaan </label>
                        <div class="col-lg-8">
                            <input type="file" class="form-control" name="cv" accept=".pdf">
                        </div>
                    </div>
                    <div class="row mb-6 rounded border p-5">
                        <h2 class="text-dark fw-bolder mt-1 mb-8 fs-3">Data Sosial Media Katalog </h2>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Facebook</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="facebook"
                                    class="form-control form-control-lg form-control-solid" placeholder=" Link Facebook"
                                    value="{{ $result['facebook'] }}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Instagram</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="instagram"
                                    class="form-control form-control-lg form-control-solid" placeholder=" Link Instagram"
                                    value="{{ $result['instagram'] }}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Twitter</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="twitter"
                                    class="form-control form-control-lg form-control-solid" placeholder=" Link Twitter"
                                    value="{{ $result['twitter'] }}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Youtube</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="youtube"
                                    class="form-control form-control-lg form-control-solid" placeholder=" Link Youtube"
                                    value="{{ $result['youtube'] }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6 rounded border p-5">
                        <h2 class="text-dark fw-bolder mt-1 mb-8 fs-3">Data Pemilik Katalog </h2>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Pemilik Katalog</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama_pemilik"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Nama Pemilik Katalog" value="{{ $result['nama_pemilik'] }}" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">No HP Pemilik</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="no_pemilik"
                                    class="form-control form-control-lg form-control-solid" placeholder="No HP "
                                    value="{{ $result['no_pemilik'] }}" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email Pemilik</label>
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email_pemilik"
                                    class="form-control form-control-lg form-control-solid" placeholder="Email "
                                    value="{{ $result['email_pemilik'] }}" required />
                            </div>
                        </div>
                    </div>

            </div>
            <div class="d-flex flex-stack pt-8">
                <div class="">
                    <a class="btn btn-light" href="{{ route('katalog.index') }}"><i class="fa fa-arrow-left mr-2"></i>
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
@include('pluign.date-picker')
