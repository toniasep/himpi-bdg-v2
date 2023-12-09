@extends('layouts.template')
@section('title')
Beranda
@endsection
@section('content_bottom')
<div class="container" id="kt_content_container">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Wrapper-->
            <div class="card-px text-center py-20 my-10">
                <!--begin::Title-->
                <h2 class="fs-2x fw-boldest mb-10">Welcome!</h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-400 fs-4 fw-bold mb-10">There are no subscriptions added yet.
                <br>Kickstart your business by adding a your first subscription</p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="add.html" class="btn btn-primary">Add Subscription</a>
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Illustration-->
            <div class="text-center px-4">
                <img src="../../assets/media/illustrations/work.png" alt="" class="mw-100 mh-300px">
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
@endsection