@extends('layouts.app')
@section('head')
    <title>Lansia Detail Fisik | Posyandu lansia</title>
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
                    <li class="breadcrumb-item text-dark">Detail gangguan lansia</li>
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
                <h3 class="card-title">Riwayat Gangguan</h3>

                <div class="d-flex align-items-center position-relative my-1">

                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <a data-bs-toggle="modal" data-bs-target="#gangguan" class="btn btn-primary align-self-center">Tambah</a>
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
                        <th class="min-w-125px text-center">Gangguan Ginjal</th>
                        <th class="min-w-125px text-center">Gangguan Pengelihatan</th>
                        <th class="min-w-125px text-center">Gangguan Pendengaran</th>
                        <th class="min-w-125px text-center">Tanggal Pemeriksaan</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($riwayat_gangguan as $key => $val)
                        <tr>
                            <td>
                                <div class="fs-7 text-dark fw-bolder">
                                    {{ $key + $riwayat_gangguan->firstItem() }}
                                    {{-- {{ $loop->iteration }} --}}
                                </div>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailGangguan{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->g_ginjal }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailGangguan{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->g_pengelihatan }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailGangguan{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->g_pendengaran }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#"
                                    data-bs-target="#detailGangguan{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->tanggal_p_g->translatedFormat('d M Y, h:i A') }}</a>
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
                                        <a data-bs-toggle="modal"
                                            data-bs-target="#GangguanEdit{{ $val->id }}"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a data-bs-toggle="modal"
                                            data-bs-target="#detailGangguan{{ $val->id }}"
                                            class="menu-link px-3">View</a>

                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3 deleteGangguan"
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
            {{ $riwayat_gangguan->links() }}

        </div>
        <!--end::Card body-->
    </div>
    {{-- ==========End Pemeriksaaan Fisik dan Tindakan============= --}}

    @include('admin.lansia.form.modal_gangguan')
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
                        window.location = "delete/fisik/" + id;
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
                        window.location = "delete/gangguan/" + id;
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
                        window.location = "delete/lab/" + id;
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
                        window.location = "delete/p3g/" + id;
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
            // alert(JSON.stringify(data));
            let authors = data;
            authors.map(function(author) {

});
        });
    </script>
@endsection
