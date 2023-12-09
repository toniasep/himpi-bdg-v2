@extends('layouts.template')
@section('title')
    Dashboards
@endsection

@section('content')
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
    <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
    @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--begin::Wrapper-->
    <div class="card-px text-center py-20 my-10">
        <!--begin::Title-->
        <h2 class="fs-2x fw-boldest mb-10">Welcome!</h2>
        <!--end::Title-->
        <!--begin::Description-->
        <p class="text-gray-400 fs-4 fw-bold mb-10">There are no subscriptions added yet.
            <br>Kickstart your business by adding a your first subscription
        </p>
        <!--end::Description-->
        <!--begin::Action-->
        <a href="{{ route('brand.index') }}" class="btn btn-primary">Manajemen Pasien </a>

        <a href="{{ route('perawat.index') }}" class="btn btn-primary">Manajemen Perawat </a>


        <a href="{{ route('tindakan.index') }}" class="btn btn-primary">Manajemen Tindakan </a>
        <!--end::Action-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Illustration-->
    <div class="text-center px-4">
        <img src="{{ asset('assets/media/illustrations/work.png') }}" alt="" class="mw-100 mh-300px">
    </div>
    <!--end::Illustration-->
@endsection
