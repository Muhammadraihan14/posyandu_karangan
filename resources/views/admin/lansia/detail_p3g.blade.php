@extends('layouts.app')
@section('head')
    <title>Lansia Detail Fisik | Posyandu lansia</title>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('konten')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Lansia</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <li class="breadcrumb-item text-muted"><a href="{{ route('lansia') }}">List lansia</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark"><a href="{{ route('lansia.detail', ['id' => $data->id]) }}">Detail lansia</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Detail p3g</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    {{-- ==========Pemeriksaaan Fisik dan Tindakan================= --}}
    <br>
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <h3 class="card-title">Riwayat P3G</h3>

                <div class="d-flex align-items-center position-relative my-1">

                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <a data-bs-toggle="modal" data-bs-target="#p3g" class="btn btn-primary align-self-center">Tambah</a>
            <!--end::Action-->
        </div>
        <div class="card-body p-9 table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="me-3">
                                No
                            </div>
                        </th>
                        <th class="min-w-125px text-center">Tingkat Kemandirian</th>
                        <th class="min-w-125px text-center">Gangguan Emosi</th>
                        <th class="min-w-125px text-center">Gangguan Kognitif</th>
                        {{-- <th class="min-w-125px text-center">Hb</th> --}}
                        <th class="min-w-125px text-center">Tanggal Pemeriksaan</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($p3g as $key => $val)
                        <tr>
                            <td>
                                <div class="fs-7 text-dark fw-bolder">
                                    {{ $key + $p3g->firstItem() }}
                                    {{-- {{ $loop->iteration }} --}}
                                </div>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailP3G{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->tingkat_kemandirian }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailP3G{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->g_emosional }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailP3G{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->g_kognitiv }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailP3G{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->tanggal_p_p3g->translatedFormat('d M Y, h:i A') }}</a>
                                {{-- <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}" class="menu-link px-3">{{ $val->tanggal_p }}</a> --}}
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a data-bs-toggle="modal" data-bs-target="#p3gEdit{{ $val->id }}"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a data-bs-toggle="modal" data-bs-target="#detailP3G{{ $val->id }}"
                                            class="menu-link px-3">View</a>

                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3 deleteP3G"
                                            data-kt-customer-table-filter="delete_row"
                                            data-id="{{ $val->id }}">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            {{ $p3g->links() }}

        </div>
        <!--end::Card body-->

   
    </div>
    {{-- ==========End Pemeriksaaan Fisik dan Tindakan============= --}}
     <div class="card card-xl-stretch mb-5 mb-xl-8 ">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bolder mb-2 text-dark">Riwayat Aktifitas </span>
                    <span class="text-muted fw-bold fs-7">Total : {{ $data->p3g->count() }}</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body  card-scroll h-400px pt-5">
                <!--begin::Timeline-->
                <div class="timeline-label">
                    <!--begin::Item-->
                    @foreach ($data->p3g as $key => $val)
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">{{ $val->tanggal_p_p3g->translatedFormat('h:i A') }}</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-primary fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-mormal timeline-content text-muted ps-3">Diperiksa oleh : {{ $val->user->name }}, {{  $val->tanggal_p_p3g->translatedFormat('d M Y') }}</div>
                            <!--end::Text-->
                        </div>
                    @endforeach
                </div>
                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
    @include('admin.lansia.form.modal_p3g')
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        @if (session()->has('success'))
            swal("Success!", "Data Berhasil dibuat", "success");
        @endif
        @if (session()->has('successEdit'))
            swal("Success!", "Data Berhasil diedit", "success");
        @endif
        @if (session()->has('success_hapus'))
            swal("Success!", "Data Berhasil dihapus", "success");
        @endif
        $('.deleteFisik').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete/" + id;
                    } else {
                        swal("Batal menghapus data!");
                    }
                });
        });
        $('.deleteGangguan').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete/" + id;
                    } else {
                        swal("Batal menghapus data!");
                    }
                });
        });
        $('.deleteLab').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete/" + id;
                    } else {
                        swal("Batal menghapus data!");
                    }
                });
        });
        $('.deleteP3G').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete/" + id;
                    } else {
                        swal("Batal menghapus data!");
                    }
                });
        });
    </script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('6f68404576d48427f8f3', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('posyandu');
        channel.bind('new-request', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
@endsection
