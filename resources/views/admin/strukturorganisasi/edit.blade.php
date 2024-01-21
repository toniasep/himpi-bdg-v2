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
                <form action="{{ route('strukturorganisasi.update', $result['id']) }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-lg-12 p-5">
                            <label class="form-label">Gambar</label>
                            <div class="col-12">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline  @error('gambar') is-invalid @enderror"
                                    data-kt-image-input="true"
                                    style="background-image: url('{{ url('storage') }}/{{ $result['gambar'] }}')">
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
                                        <input type="file" name="gambar" accept=".png, .jpg, .jpeg, .JPG" />
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
                            @if ($errors->has('gambar'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('gambar') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- end div image --}}
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-10">
                            <label class="form-label">kategori</label>
                            <select name="kategori" class="form-control cs  @error('kategori') is-invalid @enderror"
                                data-control="select2" data-placeholder="Pilih Kategori" required>
                                <option value="aktif" @if ($result['kategori'] == 'aktif') selected @endif>Aktif</option>
                                <option value="partner" @if ($result['kategori'] == 'partner') selected @endif>Partner</option>
                                <option value="riwayat" @if ($result['kategori'] == 'riwayat') selected @endif>Riwayat</option>
                            </select>
                            @if ($errors->has('kategori'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('kategori') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-4 mb-10">
                            <label class="form-label">No Urut Tampil</label>
                            <input type="number" class="form-control" name="nourut" value="{{ $result['nourut'] }}"
                                required="" />
                            @if ($errors->has('nourut'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('nourut') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-10">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $result['nama'] }}"
                                required="" />
                            @if ($errors->has('nama'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row aktif partner box">
                        <div class="col-12 mb-10">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="{{ $result['jabatan'] }}" />
                            @if ($errors->has('jabatan'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('jabatan') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row riwayat box">
                        <div class="col-12 mb-10">
                            <label class="form-label">Periode</label>
                            <input type="text" class="form-control" name="periode" value="{{ $result['periode'] }}" />
                            @if ($errors->has('periode'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('periode') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="d-flex flex-stack pt-8">
                <div class="">
                    <a class="btn btn-light" href="{{ route('strukturorganisasi') }}"><i class="fa fa-arrow-left mr-2"></i>
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
    <script>
        $(document).ready(function() {
            $("select").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
    <script>
        $('.cs').click(function() {

            if ($(this).attr("value") == "riwayat") {
                $(".Box").show('slow');
            } else {
                $(".Box").hide('slow');
            }
        });
        $('.cs').trigger('selected');
    </script>
    <script>
        $('.addAttr').click(function() {
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
