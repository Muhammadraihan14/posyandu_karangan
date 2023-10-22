@extends('layouts.app')
@section('head')
    <title>Lansia Detail | Posyandu lansia</title>
    {{-- <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> --}}
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

                    <li class="breadcrumb-item text-muted"><a href="{{ route('lansia.petugas') }}">List lansia</a></li>
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
                                            <div class="fw-bold fs-6 text-gray-400">Fisik dan Tindakan</div>
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bolder">{{ $data->pemerisaan_fisik_tindakan->count() }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <!--end::Label-->
                                        </div>
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="fw-bold fs-6 text-gray-400">Gangguan</div>
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bolder">{{ $data->riwayat_gangguan->count() }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <!--end::Label-->
                                        </div>
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="fw-bold fs-6 text-gray-400">Laboratorium</div>
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bolder">{{ $data->pemerisaan_lab->count() }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <!--end::Label-->
                                        </div>
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="fw-bold fs-6 text-gray-400">P3G</div>
                                            <div class="d-flex align-items-center">
                                                {{-- <div class="fs-2 fw-bolder" data-kt-countup="true"  data-kt-countup-value="{{ $data->p3g->count() }}" >0</div> --}}
                                                <div class="fs-2 fw-bolder">{{ $data->p3g->count() }}</div>

                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
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
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_11">P3G</a>
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
                            @if ($data->pemerisaan_fisik_tindakan->last() != null)
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Berat Badan</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-7">
                                        <span class="fw-bolder fs-6 text-gray-800">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->berat_badan : '-' }}
                                            Kg </span>
                                    </div>
                                    <div class="col-lg-1">
                                       <a href="{{ route('lansia.petugas.detail.f', ['id' => $data->id]) }}"><i class="bi bi-clock-history fs-2x"></i></a> 
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
                                            cm </span>
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
                                    <label class="col-lg-4 fw-bold text-muted">Konseling </label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->konseling : '-' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Rujuk </label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->rujuk : '-' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Tata Laksana </label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->tata_laksana : '-' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Lain-lain </label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->lain : '-' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->tanggal_p->translatedFormat('d M Y, h:i A') : '-' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Diperiksa Oleh</label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->user->name : '-' }}</span>
                                    </div>
                                </div>
                            @else
                            <div class="row mb-12">
                                <a data-bs-toggle="modal" data-bs-target="#tindakan" class="btn btn-primary align-self-center">Tambah</a>
                            </div> 
                            <div class="row"><p class="text-center col-12">Belum pernah melakukan pemeriksaan</p></div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                            @if ($data->riwayat_gangguan->last() != null)
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Gangguan Ginjal</label>
                                    <div class="col-lg-7">
                                        <span class="fw-bolder fs-6 text-gray-800">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_ginjal : '-' }}</span>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="{{ route('lansia.petugas.detail.g', ['id' => $data->id]) }}"><i class="bi bi-clock-history fs-2x"></i></a> 
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
                            @else
                            <div class="row mb-12">
                                <a data-bs-toggle="modal" data-bs-target="#gangguan" class="btn btn-primary align-self-center">Tambah</a>
                            </div> 
                            <div class="row"><p class="text-center col-12">Belum pernah melakukan pemeriksaan</p></div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_10" role="tabpanel">
                            @if ($data->pemerisaan_lab->last() != null)
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Kolesterol</label>
                                    <div class="col-lg-7">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->kolesterol : '-' }}
                                            mg / dl </span>
                                        <span
                                            class="badge {{ $statusKoles == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusKoles != null ? $statusKoles : '' }}</span>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="{{ route('lansia.petugas.detail.lab', ['id' => $data->id]) }}"><i class="bi bi-clock-history fs-2x"></i></a> 
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
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Diperiksa Oleh</label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last()->user->name != null ? $data->pemerisaan_lab->last()->user->name : '-' }}</span>
                                    </div>
                                </div>
                            @else
                            <div class="row mb-12">
                                <a data-bs-toggle="modal" data-bs-target="#lab" class="btn btn-primary align-self-center">Tambah</a>
                            </div> 
                            <div class="row"><p class="text-center col-12">Belum pernah melakukan pemeriksaan</p></div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_11" role="tabpanel">
                            @if ($data->p3g->last() != null)
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Tingkat Kemandirian (AKS/ADL)</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-mb-6 col-lg-7 ">
                                        <span class="fw-bolder fs-6 text-gray-800">{{ $data->p3g->last() != null ? $data->p3g->last()->tingkat_kemandirian : '-' }}</span>
                                        <span class="badge {{ $statusMan == 'Ketergantungan Berat / Total' ? 'badge-danger' : 'badge-success ' }}">{{ $statusMan != null ? $statusMan : '' }}</span>
                                    </div>
                                    <div class="col-mb-end col-lg-1 ">
                                        <a href="{{ route('lansia.petugas.detail.p3g', ['id' => $data->id]) }}"><i class="bi bi-clock-history fs-2x"></i></a> 
                                     </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Gangguan Mental Emosional</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->g_emosional : '-' }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Penilaian Resiko Malnutrisi</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">

                                        <div class="col-lg-8 d-flex align-items-center">
                                            {{-- <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $data->p3g->last() != null ? $data->p3g->last()->p_resiko_malnutrisi : '-' }}</span> --}}
                                            <span
                                                class="badge {{ $data->p3g->last()->p_resiko_malnutrisi == 'Malnutrisi' ? 'badge-danger' : 'badge-success ' }}">{{ $data->p3g->last()->p_resiko_malnutrisi != null ? $data->p3g->last()->p_resiko_malnutrisi : '' }}</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Penilaian Kognitiv</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->g_kognitiv : '-' }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Resiko Jatuh</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->p_resiko_jatuh : '-' }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->tanggal_p_p3g->translatedFormat('d M Y, h:i A') : '-' }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Diperiksa Oleh</label>
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last()->user->name != null ? $data->p3g->last()->user->name : '-' }}</span>
                                    </div>
                                </div>
                            @else
                            <div class="row mb-12">
                                <a data-bs-toggle="modal" data-bs-target="#p3g" class="btn btn-primary align-self-center">Tambah</a>
                            </div> 
                            <div class="row"><p class="text-center col-12">Belum pernah melakukan pemeriksaan</p></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==========Riwayat Gangguan================================ --}}
            {{-- ==========End Riwayat Gangguan=========================== --}}
            {{-- ==========LAB================================ --}}
            {{-- ==========End LAB=========================== --}}
            {{-- ========== P3G ================================ --}
            {{-- ==========End P3G =========================== --}}



            <!--end::Row-->

        </div>

        <!--end::Container-->
    </div>
    <!--end::Post-->
    @include('petugas.lansia.form.modal_fisik_tindakan')
    @include('petugas.lansia.form.modal_gangguan')
    @include('petugas.lansia.form.modal_lab')
    @include('petugas.lansia.form.modal_p3g')
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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


        });
    </script>
@endsection
