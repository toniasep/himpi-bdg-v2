@extends('layouts.template-guest')
@section('title')
    Notifikasi Permintaan Kerja Sama
@endsection
@section('content')
    <div class="container mt-20 mb-10">
        <div class="card card">
            <div class="card-header cursor-pointer">
                <div class="card-title m-0">
                    <h4 class="fw-bolder  m-0">Notifikasi Permintaan Kerja Sama</h4>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive-md">
                <table id="example" class="table table-striped table-row-bordered gy-5 gs-7 border rounded"
                    style="width:100%">
                    <thead>
                        <tr class="fw-bolder  text-gray-800 px-7">
                            <th style="width: 1%">No</th>
                            <th style="width: 50%">Perusahaan yang Mengajukan Kerja Sama</th>
                            <th style="width: 20%">Waktu pengajuan</th>
                            <th class="text-end min-w-50px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_request as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->Katalog['nama_katalog'] }}</td>
                                <td>{{ Carbon\Carbon::parse($item['created_at'])->formatLocalized('%A, %d %B %Y') }}</td>
                                <td class="text-end min-w-50px">
                                    <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                                        href="{{ route('setuju', $item['id']) }}"><i
                                            class="fa fa-check mr-2 text-primary"></i>
                                        Setuju</a>
                                    <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                                        href="{{ route('tolak', $item['id']) }}"><i
                                            class="fa fa-times mr-2 text-primary"></i>
                                        tolak</a>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.content -->
        <!-- /.content-header -->
        <div class="mt-10">
            <!-- Main content -->
            <div class="card card">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h4 class="fw-bolder m-0">Riwayat Permintaan Kerja Sama</h4>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive-md">
                    <table id="example2" class="table table-striped table-row-bordered gy-5 gs-7 border rounded"
                        style="width:100%">
                        <thead>
                            <tr class="fw-bolder text-gray-800 px-7">
                                <th style="width: 1%">No</th>
                                <th style="width: 50%">Perusahaan yang Mengajukan Kerja Sama</th>
                                <th style="width: 20%">Waktu pengajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_riwayat as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->Katalog['nama_katalog'] }}</td>
                                    <td>{{ Carbon\Carbon::parse($item['created_at'])->formatLocalized('%A, %d %B %Y') }}
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@include('pluign.data-table')
<script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
<link rel="stylesheet" href="{{ url('assets/css/sweetalert2.min.css') }}">
@section('js')
    @if (Session::get('message') != null)
        <script>
            Swal.fire({
                text: "{{ Session::get('message') }}",
                icon: "{{ Session::get('error') }}",
                customClass: {
                    confirmButton: "btn fw-bold btn-light",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            })
        </script>
    @endif
    <script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ url('assets/js/scripts.bundle.js') }}"></script>

    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#create_brand').modal('show');
                console.log("ready!");
            });
        </script>
    @endif
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
