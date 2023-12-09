@extends('layouts.template')
@section('title')
Catatan Aktifitas Pengguna
@endsection
@section('content')

<!-- /.content-header -->
<div class="ex">
    <!-- Main content -->
    <div class="card card">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder fs-6 m-0">Catatan Aktifitas Pengguna</h3>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="table table-striped table-row-bordered gy-5 gs-7 border rounded"
                style="width:100%">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        <th>URL</th>
                        <th>User</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($log as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item['description'] }}</td>
                            <td>{{ $item['log_name'] }}</td>
                            <td>{{ $item->User['name'] }}</td>
                            <td>
                                {{ Carbon\Carbon::parse($item['created_at'])->formatLocalized('%d %B %Y') }}
                            </td>
                            <!-- <td>
								<a class="text-muted font-16 pl-2" href="#"><i class="fa fa-eye"></i></a>
							</td> -->
                        </tr>
                    @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.content -->

@include('pluign.data-table')

@endsection
