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
                    <li class="breadcrumb-item text-dark">Detail fisik lansia</li>
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
                <h3 class="card-title">Pemeriksaaan Fisik dan Tindakan</h3>

                <div class="d-flex align-items-center position-relative my-1">

                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <a data-bs-toggle="modal" data-bs-target="#tindakan" class="btn btn-primary align-self-center">Tambah</a>
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
                        <th class="min-w-125px text-center">Berat Badan</th>
                        <th class="min-w-125px text-center">Tinggi Badan</th>
                        <th class="min-w-125px text-center">IMT</th>
                        <th class="min-w-125px text-center">Status Gizi</th>
                        <th class="min-w-125px text-center">Tekanan Darah</th>
                        <th class="min-w-125px text-center">Tanggal Pemeriksaan</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($pemeriksaanFisik as $key => $val)
                        <tr>
                            <td>
                                <div class="fs-7 text-dark fw-bolder">
                                    {{ $key + $pemeriksaanFisik->firstItem() }}
                                    {{-- {{ $loop->iteration }} --}}
                                </div>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->berat_badan }} Kg</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->tinggi_badan }} cm</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->imt }} Kg/m^2</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->status_gizi }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->tekanan_darah }}</a>
                            </td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" href="#" data-bs-target="#detailFisik{{ $val->id }}"
                                    class="menu-link px-3">{{ $val->tanggal_p->translatedFormat('d M Y, h:i A') }}</a>
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
                                        <a data-bs-toggle="modal" data-bs-target="#tindakanEdit{{ $val->id }}"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a data-bs-toggle="modal" data-bs-target="#detailFisik{{ $val->id }}"
                                            class="menu-link px-3">View</a>

                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3 deleteFisik"
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
            {{ $pemeriksaanFisik->links() }}

        </div>
        <!--end::Card body-->
    </div>
    {{-- ==========End Pemeriksaaan Fisik dan Tindakan============= --}}
    <!--begin::Modal - New Target-->
    <div class="modal fade" id="tindakan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.f') }}"
                        method="POST">
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Pemeriksaan Fisik dan Tindakan</h1>
                        </div>
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                        <input type="hidden" value="{{ $data->id }}" name="lansia_id" id="lansia_id">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tanggal Pemeriksaan</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="date" name="tanggal_p" @error('tanggal_p') is-invalid @enderror
                                class="form-control form-control-solid" required />
                            @error('tanggal_p')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Tinggi Badan</label>
                                <input type="number" name="tinggi_badan" id="tinggi_badan" @error('tinggi_badan') is-invalid @enderror
                                    class="form-control form-control-solid" required />
                                @error('tinggi_badan')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Berat Badan</label>
                                <input type="number" name="berat_badan" id="berat_badan" @error('berat_badan') is-invalid @enderror
                                    class="form-control form-control-solid" required />
                                @error('berat_badan')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Sistole</label>
                                <input type="number" name="sistole" @error('sistole') is-invalid @enderror
                                    class="form-control form-control-solid" required />
                                @error('sistole')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Select a Team Member"
                                    name="target_assign">
                                    <option value="">Select user...</option>
                                    <option value="1">Karina Clark</option>
                                    <option value="2">Robert Doe</option>
                                    <option value="3">Niel Owen</option>
                                    <option value="4">Olivia Wild</option>
                                    <option value="5">Sean Bean</option>
                                </select> --}}
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Diastole</label>
                                <input type="number" name="diastole" @error('diastole') is-invalid @enderror
                                    class="form-control form-control-solid" required />
                                @error('diastole')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tata Laksana</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="text" name="tata_laksana" @error('tata_laksana') is-invalid @enderror
                                class="form-control form-control-solid" required />
                            @error('tata_laksana')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Konseling</span>
                            </label>
                            <select class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a Team Member" name="konseling"
                                id="konseling">
                                <option></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Rujuk</span>
                            </label>
                            <select class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a Team Member" name="rujuk"
                                id="rujuk">
                                <option></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Lain-lain</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="text" name="lain" @error('lain') is-invalid @enderror
                                class="form-control form-control-solid" required />
                            @error('lain')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->


    {{-- @include('admin.lansia.form.modal_fisik_tindakan') --}}
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="/js/app.js"></script>
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
    
            var pusher = new Pusher('6f68404576d48427f8f3', {
                cluster: 'ap1'
            });
    
            var channel = pusher.subscribe('posyandu');
            channel.bind('new-request', function(data) {
                console.log(data.tinggi);
                $('#tinggi_badan').val(data.tinggi).toString();
                $('#berat_badan').val(data.berat).toString();
    
    
            });
        </script>>

@endsection
