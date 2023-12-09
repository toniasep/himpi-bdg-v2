@extends('layouts.template')
@section('title')
Akun Saya
@endsection
@section('content_bottom')

@include('akun.akuninfo')

<!--begin::details View-->
<div class="container-fluid">
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true"
            aria-controls="kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Ganti Email</h3>
            </div>
        </div>
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form" class="form" action="{{route('akun.gantiemailupdate')}}" method="POST">
                {{ csrf_field() }}
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Email Lama</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="email_lama" class="form-control form-control-lg form-control-solid"
                                placeholder="Email Lama" value="{{ Auth::user()['email'] }}"  readonly/>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Email Baru</label>
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                placeholder="Email Baru"  value="{{ old('email') }}" required/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset </button>
                    <button type="submit" class="btn btn-primary float-right ml-1"><i class="fa fa-check mr-2"></i>
                        Submit </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
</div>
@endsection
@include('pluign.data-table')
@section('js2')
<script src="https://www.anggota.perkindojabar.org/js/formater.js"></script>
<script>
    jQuery(function ($) {
        $("#no_ktp").mask("9999999999999999");
    });

</script>
@endsection
