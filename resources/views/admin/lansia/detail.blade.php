@extends('layouts.app')
@section('head')
    <title>Lansia Detail | Posyandu lansia</title>
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
                    <li class="breadcrumb-item text-dark">Detail lansia</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
        </div>
        <!--end::Container-->
    </div>

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="{{ url('/') }}/assets/media/avatars/blank.png" alt="image" />
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                                </div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#"
                                            class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $data->name }}</a>
                                        <a href="#">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                        fill="#00A3FF" />
                                                    <path class="permanent"
                                                        d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        {{-- <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a> --}}
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                        <a href="#"
                                            class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                        fill="black" />
                                                    <path
                                                        d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->{{ $data->alamat }}</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="black" />
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                    data-kt-countup-value="4500" data-kt-countup-prefix="$">
                                                    {{ $data->pemerisaan_fisik_tindakan->count() }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Melakukan pemeriksaan</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->

                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <!--end::Progress-->
                            </div>
                            <!--end::Stats-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-header card-header-stretch">
                    <h3 class="card-title">Detail</h3>
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">Lansia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Fisik & Tindakan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Gangguan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_10">LAB</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $data->name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">NIK</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->nik }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Umur</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->umur }} tahun</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Jenis kelamin</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->gender }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->alamat }}</span>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Desa</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $desa->name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            {{-- </div> --}}
                            <!--end::Card body-->
                        </div>

                        <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Berat Badan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span
                                        class="fw-bolder fs-6 text-gray-800">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->berat_badan : '-' }}
                                        Kg </span>
                                    {{-- <span --}}
                                    {{-- class="badge {{ $statusKoles == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusKoles != null ? $statusKoles : '' }}</span> --}}

                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Tinggi Badan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->tinggi_badan : '-' }}
                                        m </span>
                                    {{-- <span class="badge {{ $statusGula == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusGula != null ? $statusGula : '' }}</span> --}}
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">IMT</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">

                                    <div class="col-lg-8 d-flex align-items-center">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800 me-2">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->imt : '-' }}
                                            Kg/m^2 </span>
                                        <span
                                            class="badge {{ $data->pemerisaan_fisik_tindakan->last()->status_gizi == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $data->pemerisaan_fisik_tindakan->last()->status_gizi != null ? $data->pemerisaan_fisik_tindakan->last()->status_gizi : '' }}</span>

                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Tekanan Darah </label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->sistole : '-' }}
                                        /
                                        {{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->diastole : '-' }}
                                        mmHg </span>
                                    <span
                                        class="badge {{ $data->pemerisaan_fisik_tindakan->last()->tekanan_darah == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $data->pemerisaan_fisik_tindakan->last()->tekanan_darah != null ? $data->pemerisaan_fisik_tindakan->last()->tekanan_darah : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->tanggal_p->translatedFormat('d M Y, h:i A') : '-' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Gangguan Ginjal</label>
                                <div class="col-lg-8">
                                    <span
                                        class="fw-bolder fs-6 text-gray-800">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_ginjal : '-' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Gangguan Penglihatan</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_pengelihatan : '-' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Gangguan Pendengaran</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_pendengaran : '-' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Penyuluhan</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->penyuluhan : '-' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Pemberdayaan</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->pemberdayaan : '-' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Keterangan</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->keterangan : '-' }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_tab_pane_10" role="tabpanel">
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Kolesterol</label>
                                <div class="col-lg-8">
                                    <span
                                        class="fw-bolder fs-6 text-gray-800">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->kolesterol : '-' }}
                                        mg / dl </span>
                                    <span
                                        class="badge {{ $statusKoles == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusKoles != null ? $statusKoles : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Gula Darah</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->gula_darah : '-' }}
                                        mg / dl </span>
                                    <span
                                        class="badge {{ $statusGula == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusGula != null ? $statusGula : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Asam Urat</label>
                                <div class="col-lg-8 fv-row">
                                    <div class="col-lg-8 d-flex align-items-center">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800 me-2">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->asam_urat : '-' }}
                                            mg / dl </span>
                                        <span
                                            class="badge {{ $statusAsamUrat == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusAsamUrat != null ? $statusAsamUrat : '' }}</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Hemoglobin</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->hb : '-' }}
                                        mg / dl </span>
                                    <span
                                        class="badge {{ $statusHb == 'Anemia' ? 'badge-danger' : 'badge-success ' }}">{{ $statusHb != null ? $statusHb : '' }}</span>

                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
                                <div class="col-lg-8 fv-row">
                                    <span
                                        class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->tanggal_p_lab->translatedFormat('d M Y, h:i A') : '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
