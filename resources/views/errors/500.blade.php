@extends('layouts.app')
@section('title')
500
@endsection
@section('content')
<center>
	<a href="{{url('/')}}" class="mb-10 pt-lg-20"><img alt="Logo" src="../../assets/media/logos/logo-text.png" class="h-200px mb-0"/></a>
	<div class="pt-lg-10">
		<h1 class="fw-bolder fs-4x text-gray-700 mb-10">Halaman tidak ditemukan</h1>
		<div class="fw-bold fs-3 text-gray-400 mb-15">
			Maaf, Halaman yang Anda cari tidak ditemukan! <br/>Silahkan Kembali Ke Halaman Utama <br>
		<small></small>
	</div>

			<div class="text-center">
				<a href="{{url('/')}}" class="btn btn-lg btn-primary fw-bolder">Go to homepage</a>
			</div>
		</div>
	</center>
@endsection