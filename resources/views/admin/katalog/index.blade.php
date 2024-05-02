@extends('layouts.template')
@section('title')
    Data Katalog
@endsection
@section('content_bottom')
    <!-- /.content-header -->
    <div class="ex">
        <!-- Main content -->
        <div class="card card">
            <div class="card-header cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bolder fs-6 m-0">Data Katalog</h3>
                </div>
                <a href="{{ route('katalog.create') }}" type="button" class="align-self-center  btn btn-sm btn-primary ">
                    <i class="fas fa-plus" aria-hidden="true"></i> Tambah Katalog
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example" class="table table-striped table-row-bordered gy-5 gs-7 border rounded"
                    style="width:100%">
                    <thead>
                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                            <th>No</th>
                            <th>Logo</th>
                            <th>Nama Katalog</th>
                            <th>Alamat</th>
                            <th>Pengguna</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td> <img src="{{url('image/katalog')}}/{{$item['logo']}}" alt="{{$item['nama_katalog']}}"
                                class="img-fluid w-100"> </td>
                                <td><img alt="Logo" src="{{ asset('image/katalog') }}/{{ $item['logo'] }}"
                                        class="img-fluid  w-100" /></td>
                                <td>{{ $item['nama_katalog'] }}</td>
                                <td>{{ $item['alamat'] }}</td>
                                <td>{{ $item->User['name'] }}</td>
                                <form action="{{ route('katalog.destroy', $item['id']) }}" method="post">
                                    <td style="width: 38%">

                                        <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2 addAttr"
                                            href="javascript:;" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card"
                                            data-id="{{ $item['id'] }}" data-satu="{{ $item['nama_katalog'] }}"
                                            data-dua="{{ $item['jenis'] }}" data-tiga="{{ $item['deskripsi'] }}"
                                            data-empat="{{ $item['logo'] }}" data-lima="{{ $item['alamat'] }}"
                                            data-enam="{{ $item['nama_pemilik'] }}" data-tujuh="{{ $item['no_pemilik'] }}"
                                            data-delapan="{{ $item['email_pemilik'] }}"
                                            data-sembilan="{{ $item['facebook'] }}"
                                            data-sepuluh="{{ $item['instagram'] }}" data-sebelas="{{ $item['twitter'] }}"
                                            data-duabelas="{{ $item['youtube'] }}"
                                            data-tigabelas="{{ $item->User['name'] }}" data-empatbelas="" data-limabelas=""
                                            data-created_at="{{ Carbon\Carbon::parse($item['created_at'])->formatLocalized('%A, %d %B %Y') }}"
                                            data-updated_at="{{ Carbon\Carbon::parse($item['updated_at'])->formatLocalized('%A, %d %B %Y') }}">
                                            <i class="far fa-eye text-primary"></i>Lihat</a>

                                        <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                                            href="{{ route('katalog.edit', $item['id']) }}">
                                            <i class="far fa-edit text-primary"></i> Ubah</a>

                                        <button type="submit"
                                            class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                                            onclick="return confirm('Apakah anda yakin ingin Menghapus data {{ $item['judul'] }} dari sistem?')">
                                            <i class="fa fa-trash-alt text-primary"></i> Hapus</button>
                                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                        <input type="hidden" value="delete" name="_method">
                                </form>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.content -->



    <!--begin::Modal - Create perawat-->
    <div class="modal fade" id="create_perawat" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="mb-0">Tambah Data Katalog</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z"
                                    fill="#12131A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z"
                                    fill="#12131A" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body my-1">
                    <div class="container py-5 rounded border p-10 row">
                        <form action="{{ route('katalog.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">nama_katalog</label>
                                    <input type="text" class="form-control" name="nama_katalog" value=""
                                        required2="" />
                                    @if ($errors->has('nama_katalog'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('nama_katalog') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">jenis</label>
                                    <select class="form-select form-select-solid form-control" data-control="select2"
                                        name="jenis[]" data-placeholder="Select an option" data-allow-clear="true"
                                        multiple="multiple" required2="">
                                        <option></option>
                                        @foreach ($master_bidang_usaha as $data)
                                            <option value="{{ $data['id'] }}">{{ $data['bidang_usaha'] }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('jenis'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('jenis') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" value=""
                                        required2="" />
                                    @if ($errors->has('deskripsi'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('deskripsi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">logo</label>
                                    <input type="text" class="form-control" name="logo" value=""
                                        required2="" />
                                    @if ($errors->has('logo'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">alamat</label>
                                    <input type="text" class="form-control" name="alamat" value=""
                                        required2="" />
                                    @if ($errors->has('alamat'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">nama_pemilik</label>
                                    <input type="text" class="form-control" name="nama_pemilik" value=""
                                        required2="" />
                                    @if ($errors->has('nama_pemilik'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('nama_pemilik') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">no_pemilik</label>
                                    <input type="text" class="form-control" name="no_pemilik" value=""
                                        required2="" />
                                    @if ($errors->has('no_pemilik'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('no_pemilik') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">email_pemilik</label>
                                    <input type="text" class="form-control" name="email_pemilik" value=""
                                        required2="" />
                                    @if ($errors->has('email_pemilik'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('email_pemilik') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">facebook</label>
                                    <input type="text" class="form-control" name="facebook" value=""
                                        required2="" />
                                    @if ($errors->has('facebook'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('facebook') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">instagram</label>
                                    <input type="text" class="form-control" name="instagram" value=""
                                        required2="" />
                                    @if ($errors->has('instagram'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('instagram') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">twitter</label>
                                    <input type="text" class="form-control" name="twitter" value=""
                                        required2="" />
                                    @if ($errors->has('twitter'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('twitter') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">youtube</label>
                                    <input type="text" class="form-control" name="youtube" value=""
                                        required2="" />
                                    @if ($errors->has('youtube'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('youtube') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">user_id</label>
                                    <input type="text" class="form-control" name="user_id" value=""
                                        required2="" />
                                    @if ($errors->has('user_id'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <div class="d-flex flex-stack pt-8">
                        <div class="">
                        </div>
                        <div class="">
                            <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary float-right ml-1"><i
                                    class="fa fa-check mr-2"></i>
                                Submit </button>
                        </div>
                    </div>
                    </form>

                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create perawat-->


    <!--begin::Modal - New Card-->
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="mb-0">Detail Data Katalog</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z"
                                    fill="#12131A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z"
                                    fill="#12131A" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body my-1">
                    <!--begin::Form-->
                    <div class="row">
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">nama katalog</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-dark" id="satu"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">jenis</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold fs-6" id="dua"></span>
                                </div>
                            </div>

                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">deskripsi</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold fs-6" id="tiga"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">logo</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="empat"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">alamat</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="lima"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">nama pemilik</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="enam"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">no pemilik</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="tujuh"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">email pemilik</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="delapan"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">facebook</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="sembilan"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">instagram</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="sepuluh"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">twitter</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="sebelas"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">youtube</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="duabelas"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">pengguna</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="tigabelas"></span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">Data Diterbitkan Pada</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="created_at"></span>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-bold text-muted text-capitalize">Data Diterbitkan Pada</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6" id="updated_at"></span>
                                </div>
                            </div>
                            <!--begin::Notice-->

                            <!--end::Notice-->
                        </div>
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->
@endsection
@include('pluign.data-table')
@section('js2')
    <script>
        $('.addAttr').click(function() {
            var id = $(this).data('id');
            var satu = $(this).data('satu');
            var dua = $(this).data('dua');
            var tiga = $(this).data('tiga');
            var empat = $(this).data('empat');
            var lima = $(this).data('lima');
            var enam = $(this).data('enam');
            var tujuh = $(this).data('tujuh');
            var delapan = $(this).data('delapan');
            var sembilan = $(this).data('sembilan');
            var sepuluh = $(this).data('sepuluh');
            var sebelas = $(this).data('sebelas');
            var duabelas = $(this).data('duabelas');
            var tigabelas = $(this).data('tigabelas');
            var empatbelas = $(this).data('empatbelas');
            var limabelas = $(this).data('limabelas');
            var created_at = $(this).data('created_at');
            var updated_at = $(this).data('updated_at');

            $('#satu').text(satu);
            $('#dua').text(dua);
            $('#tiga').text(tiga);
            $('#empat').text(empat);
            $('#lima').text(lima);
            $('#enam').text(enam);
            $('#tujuh').text(tujuh);
            $('#delapan').text(delapan);
            $('#sembilan').text(sembilan);
            $('#sepuluh').text(sepuluh);
            $('#sebelas').text(sebelas);
            $('#duabelas').text(duabelas);
            $('#tigabelas').text(tigabelas);
            $('#empatbelas').text(empatbelas);
            $('#limabelas').text(limabelas);
            $('#created_at').text(created_at);
            $('#updated_at').text(updated_at);
        });
    </script>
@endsection
