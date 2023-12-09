@extends('layouts.template')
@section('title')
Pertanyaan Umum
@endsection
@section('content_bottom')
<!-- /.content-header -->
<div class="ex">
    <!-- Main content -->
    <div class="card card">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder fs-6 m-0">Pertanyaan Umum</h3>
            </div>
            <a data-bs-toggle="modal" data-bs-target="#create_brand" href="#" type="button"
                class="align-self-center  btn btn-sm btn-primary "><i class="fas fa-plus" aria-hidden="true"></i> Tambah Pertanyaan Umum</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive-md">
            <table id="example" class="table table-striped table-row-bordered gy-5 gs-7 border rounded"
                style="width:100%">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th style="width: 3%">No Urutan</th>
                        <th style="width: 20%">Judul</th>
                        <th style="width: 20%">Deskripsi</th>
                        <th class="text-end min-w-50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $key => $item)
                    <tr>
                        <td>{{ $item['nourut'] }}</td>
                        <td class="fw-bolder">{{ $item['judul'] }}</td>
                        <td>{{ $item['deskripsi'] }}</td>
                        <form action="{{ route('pertanyaanumum.destroy', $item['id']) }}" method="post">
                            <td class="text-end min-w-50px">
                                <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2 addAttr"
                                    href="javascript:;" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card"
                                    data-id="{{ $item['id'] }}" data-satu="{{ $item['judul'] }}"
                                    data-dua="{{ $item['deskripsi'] }}"
                                    data-created_at="{{ Carbon\Carbon::parse($item['created_at'])->formatLocalized('%A, %d %B %Y')}}"
                                    data-updated_at="{{ Carbon\Carbon::parse($item['updated_at'])->formatLocalized('%A, %d %B %Y')}}">
                                    <i class="far fa-eye text-primary"></i>Lihat</a>
                                <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                                    href="{{ route('pertanyaanumum.edit', $item['id']) }}">
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



<!--begin::Modal - Create Brand-->
<div class="modal fade" data-bs-backdrop="static" id="create_brand" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="mb-0">Tambah Pertanyaan Umum</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                    <form action="{{route('pertanyaanumum.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 mb-10">
                                <label class="form-label">No urut</label>
                                <input type="number" class="form-control  @error('nourut') is-invalid @enderror"
                                    name="nourut" value="" placeholder="Masukan nourut" required="" />
                                @if ($errors->has('nourut'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('nourut') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-10">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                                    name="judul" value="" placeholder="Masukan judul" required="" />
                                @if ($errors->has('judul'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('judul') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-10">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Masukan deskripsi" required=""  cols="3" rows="3"></textarea>
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
                    </div>
                    <div class="">
                        <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset </button>
                        <button type="submit" class="btn btn-primary float-right ml-1"><i class="fa fa-check mr-2"></i>
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
<!--end::Modal - Create Brand-->


<!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_card" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="mb-0">Detail Pertanyaan Umum</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                            <label class="col-lg-4 fw-bold text-muted text-capitalize">Judul Pernyataan</label>
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-dark" id="satu"></span>
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted text-capitalize">Deskripsi</label>
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6" id="dua"></span>
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
    "use strict";
    var KTUsersList = function () {
        var e, t, n, r, o = document.getElementById("kt_table_users"),
            c = () => {
                o.querySelectorAll('[data-kt-users-table-filter="delete_row"]').forEach((t => {
                    t.addEventListener("click", (function (t) {
                        t.preventDefault();
                        const n = t.target.closest("tr"),
                            r = n.querySelectorAll("td")[1].querySelectorAll("a")[1]
                            .innerText;
                        Swal.fire({
                            text: "Are you sure you want to delete " + r + "?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function (t) {
                            t.value ? Swal.fire({
                                text: "You have deleted " + r + "!.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            }).then((function () {
                                e.row($(n)).remove().draw()
                            })).then((function () {
                                a()
                            })) : "cancel" === t.dismiss && Swal.fire({
                                text: customerName +
                                    " was not deleted.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            })
                        }))
                    }))
                }))
            },
            l = () => {
                const c = o.querySelectorAll('[type="checkbox"]');
                t = document.querySelector('[data-kt-user-table-toolbar="base"]'), n = document.querySelector(
                    '[data-kt-user-table-toolbar="selected"]'), r = document.querySelector(
                    '[data-kt-user-table-select="selected_count"]');
                const s = document.querySelector('[data-kt-user-table-select="delete_selected"]');
                c.forEach((e => {
                    e.addEventListener("click", (function () {
                        setTimeout((function () {
                            a()
                        }), 50)
                    }))
                })), s.addEventListener("click", (function () {
                    Swal.fire({
                        text: "Are you sure you want to delete selected customers?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (t) {
                        t.value ? Swal.fire({
                            text: "You have deleted all selected customers!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            c.forEach((t => {
                                t.checked && e.row($(t.closest(
                                    "tbody tr"))).remove()
                                .draw()
                            }));
                            o.querySelectorAll('[type="checkbox"]')[0]
                                .checked = !1
                        })).then((function () {
                            a(), l()
                        })) : "cancel" === t.dismiss && Swal.fire({
                            text: "Selected customers was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
            };
        const a = () => {
            const e = o.querySelectorAll('tbody [type="checkbox"]');
            let c = !1,
                l = 0;
            e.forEach((e => {
                e.checked && (c = !0, l++)
            })), c ? (r.innerHTML = l, t.classList.add("d-none"), n.classList.remove("d-none")) : (t
                .classList.remove("d-none"), n.classList.add("d-none"))
        };
        return {
            init: function () {
                o && (o.querySelectorAll("tbody tr").forEach((e => {
                        const t = e.querySelectorAll("td"),
                            n = t[3].innerText.toLowerCase();
                        let r = 0,
                            o = "minutes";
                        n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r =
                                parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes(
                            "hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n
                            .includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n
                            .includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                        const c = moment().subtract(r, o).format();
                        t[3].setAttribute("data-order", c);
                        const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                        t[5].setAttribute("data-order", l)
                    })), (e = $(o).DataTable({
                        info: !1,
                        order: [],
                        pageLength: 10,
                        lengthChange: !1,
                        columnDefs: [{
                            orderable: !1,
                            targets: 0
                        }, {
                            orderable: !1,
                            targets: 6
                        }]
                    })).on("draw", (function () {
                        l(), c(), a()
                    })), l(), document.querySelector('[data-kt-user-table-filter="search"]')
                    .addEventListener("keyup", (function (t) {
                        e.search(t.target.value).draw()
                    })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener(
                        "click", (function () {
                            document.querySelector('[data-kt-user-table-filter="form"]')
                                .querySelectorAll("select").forEach((e => {
                                    $(e).val("").trigger("change")
                                })), e.search("").draw()
                        })), c(), (() => {
                        const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                            n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                            r = t.querySelectorAll("select");
                        n.addEventListener("click", (function () {
                            var t = "";
                            r.forEach(((e, n) => {
                                e.value && "" !== e.value && (0 !== n && (t +=
                                    " "), t += e.value)
                            })), e.search(t).draw()
                        }))
                    })())
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function () {
        KTUsersList.init()
    }));

</script>
@if(count($errors)>0)
<script>
    $(document).ready(function () {
        $('#create_brand').modal('show');
        console.log("ready!");
    });

</script>
@endif
<script>
    $('.addAttr').click(function () {
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
