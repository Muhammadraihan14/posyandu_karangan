@extends('layouts.app')
@section('head')
    @if (isset($data))
        <title>Edit | Posyandu lansia</title>
    @else
        <title>Tambah | Posyandu lansia</title>
    @endif
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
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted"><a href="{{ route('lansia') }}">List lansia</a></li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    @if (isset($data))
                        <li class="breadcrumb-item text-dark">Edit lansia</li>
                    @else
                        <li class="breadcrumb-item text-dark">Tambah lansia</li>
                    @endif
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Form Lansia</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form class="form" action="{{ route('lansia.save') }}" method="POST">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    @if (isset($data))
                        <!--begin::Input group-->
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                                    value="{{ $data->name }}" placeholder="Masukan Nama Lengkap"
                                    @error('name') is-invalid @enderror required />
                                @error('name')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="nik" class="form-control form-control-lg form-control-solid"
                                    value="{{ $data->nik }}" placeholder="Masukan Nomor Induk kependudukan"
                                    @error('nik') is-invalid @enderror required />
                                @error('nik')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Umur</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="umur" class="form-control form-control-lg form-control-solid"
                                    placeholder="Masukan Umur" value="{{ $data->umur }}"
                                    @error('umur') is-invalid @enderror required />
                                @error('umur')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Kelamin</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="gender" id="gender"
                                    class="form-control form-control-lg form-control-solid">
                                    <option></option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="alamat" class="form-control form-control-lg form-control-solid"
                                    placeholder="Masukan Alamat" value="{{ $data->alamat }}"
                                    @error('alamat') is-invalid @enderror required />
                                @error('alamat')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Desa</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="desa_id" id="desa_id"
                                    class="form-control form-control-lg form-control-solid">
                                    <option></option>
                                    @foreach ($desa as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Gangguan Ginjal</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="g_ginjal" id="g_ginjal"
                                    class="form-control form-control-lg form-control-solid">
                                    <option></option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Gangguan Penglihatan</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="g_pengelihatan" id="g_pengelihatan"
                                    class="form-control form-control-lg form-control-solid">
                                    <option value=""></option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Gangguan Pendengaran</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="g_pendengaran" id="g_pendengaran"
                                    class="form-control form-control-lg form-control-solid">
                                    <option value=""></option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Penyuluhan</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="penyuluhan" id="penyuluhan"
                                    class="form-control form-control-lg form-control-solid"
                                    value="{{ $GangguanSelected->penyuluhan }}" placeholder="Masukan Jenis penyuluan"
                                    @error('penyuluhan') is-invalid @enderror required />
                                @error('penyuluhan')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pemberdayaan</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="pemberdayaan" id="pemberdayaan"
                                    class="form-control form-control-lg form-control-solid"
                                    value="{{ $GangguanSelected->pemberdayaan }}"
                                    placeholder="Masukan Jenis pemberdayaan" @error('pemberdayaan') is-invalid @enderror
                                    required />
                                @error('pemberdayaan')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                            <div class="row mb-6">
                                <!--end::Col-->
                                <div class="d-flex flex-column mb-5 fv-row">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Keterangan</label>

                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" rows="3" name="keterangan" id="keterangan"
                                        placeholder="Masukan keterangan">{{ $GangguanSelected->keterangan }}</textarea>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                </div>
                {{-- ?///////////////////////////////////////////////////////////////// --}}
            @else
                <!--begin::Input group-->

                <!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Nama Lengkap" @error('name') is-invalid @enderror required />
                        @error('name')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="number" name="nik" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Nomor Induk kependudukan" @error('nik') is-invalid @enderror required />
                        @error('nik')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Umur</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="number" name="umur" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Umur" @error('umur') is-invalid @enderror required />
                        @error('umur')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Kelamin</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="gender" id="gender" class="form-control form-control-lg form-control-solid">
                            <option></option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="alamat" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Alamat" @error('alamat') is-invalid @enderror required />
                        @error('alamat')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Desa</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="desa_id" id="desa_id" class="form-control form-control-lg form-control-solid">
                            <option></option>
                            @foreach ($desa as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Gangguan Ginjal</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="g_ginjal" id="g_ginjal" class="form-control form-control-lg form-control-solid">
                            <option></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Gangguan Penglihatan</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="g_pengelihatan" id="g_pengelihatan"
                            class="form-control form-control-lg form-control-solid">
                            <option value=""></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Gangguan Pendengaran</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="g_pendengaran" id="g_pendengaran"
                            class="form-control form-control-lg form-control-solid">
                            <option></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Penyuluhan</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="penyuluhan" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Jenis penyuluan" @error('penyuluhan') is-invalid @enderror required />
                        @error('penyuluhan')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Pemberdayaan</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="pemberdayaan" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Jenis pemberdayaan" @error('pemberdayaan') is-invalid @enderror
                            required />
                        @error('pemberdayaan')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <div class="row mb-6">
                        <!--end::Col-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Keterangan</label>

                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" rows="3" name="keterangan" placeholder="Masukan keterangan"></textarea>
                            <!--end::Input-->
                        </div>
                    </div>
                </div>
        </div>
        @endif
    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Form Pemeriksaan Fisik dan Tindakan</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->

            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                @if (isset($data))
                    <!--begin::Input group-->
                    {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                    <!--end::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Tanggal Pemeriksaan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="date" name="tanggal_p"
                                class="form-control form-control-lg form-control-solid" id="tanggal_p" placeholder=""
                                @error('tanggal_p') is-invalid @enderror />
                            <div class="invalid-feddback " role="alert">
                                <p>Terakhir pemeriksaan :
                                    {{ $FisikSelected != null ? $FisikSelected->tanggal_p->format('d M Y') : '' }} </p>
                            </div>
                            @error('tanggal_p')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tinggi Badan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            {{-- @foreach ($data->pemerisaan_fisik_tindakan as $val) --}}
                            <input type="number" name="tinggi_badan"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ $FisikSelected->tinggi_badan }}" placeholder=""
                                @error('tinggi_badan') is-invalid @enderror required />
                            {{-- @endforeach --}}

                            @error('tinggi_badan')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Berat Badan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="berat_badan"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ $FisikSelected->berat_badan }}" placeholder=""
                                @error('berat_badan') is-invalid @enderror required />
                            @error('berat_badan')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Sistole</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="sistole" class="form-control form-control-lg form-control-solid"
                                value="{{ $FisikSelected->sistole }}" placeholder=""
                                @error('sistole') is-invalid @enderror required />
                            @error('sistole')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Diastole</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="diastole" class="form-control form-control-lg form-control-solid"
                                value="{{ $FisikSelected->diastole }}" placeholder=""
                                @error('diastole') is-invalid @enderror required />
                            @error('diastole')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tata Laksana</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="tata_laksana"
                                class="form-control form-control-lg form-control-solid" placeholder=""
                                value="{{ $FisikSelected->tata_laksana }}" @error('tata_laksana') is-invalid @enderror
                                required />
                            @error('tata_laksana')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Konseling</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="konseling" id="konseling"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Rujuk</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="rujuk" id="rujuk"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Lain-lain</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="lain" class="form-control form-control-lg form-control-solid"
                                value="{{ $FisikSelected->lain }}" placeholder="" @error('lain') is-invalid @enderror
                                required />
                            @error('lain')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
            </div>
        @else
            <!--begin::Input group-->

            <!--end::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Tanggal Pemeriksaan</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="date" name="tanggal_p" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('tanggal_p') is-invalid @enderror required />
                    @error('tanggal_p')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Tinggi Badan</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="tinggi_badan" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('tinggi_badan') is-invalid @enderror required />
                    @error('tinggi_badan')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Berat Badan</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="berat_badan" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('berat_badan') is-invalid @enderror required />
                    @error('berat_badan')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Sistole</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="sistole" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('sistole') is-invalid @enderror required />
                    @error('sistole')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Diastole</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="diastole" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('diastole') is-invalid @enderror required />
                    @error('diastole')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Tata Laksana</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="tata_laksana" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('tata_laksana') is-invalid @enderror required />
                    @error('tata_laksana')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">Konseling</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="konseling" id="konseling" class="form-control form-control-lg form-control-solid">
                        <option value=""></option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">Rujuk</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="rujuk" id="rujuk" class="form-control form-control-lg form-control-solid">
                        <option value=""></option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">Lain-lain</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="lain" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('lain') is-invalid @enderror required />
                    @error('lain')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
        </div>
        @endif
        <!--end::Form-->
    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Form P3G</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                @if (isset($data))
                    <!--begin::Input group-->
                    {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <input type="hidden" name="petugas_id" id="petugas_id" value="{{ Auth::user()->id }}">

                    <!--end::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Tanggal Pemeriksaan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="date" name="tanggal_p_p3g"
                                class="form-control form-control-lg form-control-solid" placeholder=""
                                @error('tanggal_p_p3g') is-invalid @enderror />
                            <div class="invalid-feddback " role="alert">
                                {{-- <p>Terakhir pemeriksaan :  {{$P3gSelected != null ? $P3gSelected->tanggal_p_p3g->format('d M Y'): "-" }} </p>  --}}
                                <p>
                                    Terakhir Pemeriksaan :
                                    {{ $data->p3g->count() == 0 ? 'Belum Pernah Periksa' : $P3gSelected->tanggal_p_p3g->format('d M Y') }}
                                </p>
                            </div>
                            @error('tanggal_p_p3g')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Tingkat Kemandirian</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="tingkat_kemandirian" id="tingkat_kemandirian"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value='A'>A</option>
                                <option value='B'>B</option>
                                <option value='C'>C</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Gangguan Emosional</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="g_emosional" id="g_emosional"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Gangguan Kognitiv</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="g_kognitiv" id="g_kognitiv"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Penilaian Resiko Malnutrisi</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="p_resiko_malnutrisi" id="p_resiko_malnutrisi"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value='N'>Normal</option>
                                <option value='RM'>Resiko Malnutrisi</option>
                                <option value='M'>Malnutrisi</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Resiko Jatuh</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="p_resiko_jatuh" id="p_resiko_jatuh"
                                class="form-control form-control-lg form-control-solid">
                                <option></option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
            </div>
        @else
            <!--begin::Input group-->
            <input type="hidden" name="petugas_id" id="petugas_id" value="{{ Auth::user()->id }}">

            <!--end::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Tanggal Pemeriksaan</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="date" name="tanggal_p_p3g" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('tanggal_p_p3g') is-invalid @enderror />
                    @error('tanggal_p_p3g')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Tingkat Kemandirian</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="tingkat_kemandirian" id="tingkat_kemandirian"
                        class="form-control form-control-lg form-control-solid">
                        <option></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Gangguan Emosional</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="g_emosional" id="g_emosional" class="form-control form-control-lg form-control-solid">
                        <option></option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Gangguan Kognitiv</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="g_kognitiv" id="g_kognitiv" class="form-control form-control-lg form-control-solid">
                        <option></option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Penilaian Resiko Malnutrisi</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="p_resiko_malnutrisi" id="p_resiko_malnutrisi"
                        class="form-control form-control-lg form-control-solid">
                        <option></option>
                        <option value='N'>Normal</option>
                        <option value='RM'>Resiko Malnutrisi</option>
                        <option value='M'>Malnutrisi</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Resiko Jatuh</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="p_resiko_jatuh" id="p_resiko_jatuh"
                        class="form-control form-control-lg form-control-solid">
                        <option></option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
        </div>
        @endif
    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <!--end::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Form Pemeriksaaan Laboratorium</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                @if (isset($data))
                    <!--begin::Input group-->
                    {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Tanggal Pemeriksaan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="date" name="tanggal_p_lab"
                                class="form-control form-control-lg form-control-solid" placeholder=""
                                @error('tanggal_p_lab') is-invalid @enderror />
                            <div class="invalid-feddback " role="alert">
                                <p>Terakhir pemeriksaan :
                                    {{ $LabSelected != null ? $LabSelected->tanggal_p_lab->format('d M Y') : 'Belum Pernah Periksa' }}
                                </p>
                            </div>
                            @error('tanggal_p_lab')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>

                    <!--end::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Kolesterol</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="kolesterol" id="kolesterol"
                                value="{{ $LabSelected != null ? $LabSelected->kolesterol : '' }}"
                                class="form-control form-control-lg form-control-solid" placeholder=""
                                @error('kolesterol') is-invalid @enderror />
                            @error('kolesterol')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Gula Darah</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="gula_darah"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ $LabSelected != null ? $LabSelected->gula_darah : '' }}"
                                @error('gula_darah') is-invalid @enderror />
                            @error('gula_darah')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Asam Urat</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="asam_urat"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ $LabSelected != null ? $LabSelected->asam_urat : '' }}"
                                @error('asam_urat') is-invalid @enderror />
                            @error('asam_urat')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Hemoglobin</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="hb" class="form-control form-control-lg form-control-solid"
                                value="{{ $LabSelected != null ? $LabSelected->asam_urat : '' }}" placeholder=""
                                @error('hb') is-invalid @enderror />
                            @error('hb')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
            </div>
        @else
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Tanggal Pemeriksaan</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="date" name="tanggal_p_lab" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('tanggal_p_lab') is-invalid @enderror />
                    @error('tanggal_p_lab')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>

            <!--end::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Kolesterol</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="kolesterol" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('kolesterol') is-invalid @enderror />
                    @error('kolesterol')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Gula Darah</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="gula_darah" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('gula_darah') is-invalid @enderror />
                    @error('gula_darah')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Asam Urat</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="asam_urat" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('asam_urat') is-invalid @enderror />
                    @error('asam_urat')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label  fw-bold fs-6">Hemoglobin</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="number" name="hb" class="form-control form-control-lg form-control-solid"
                        placeholder="" @error('hb') is-invalid @enderror />
                    @error('hb')
                        <div class="invalid-feddback " role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
        </div>
        @endif
        <!--begin::Actions-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2"><a
                    href="{{ route('lansia') }}">Cancel</a> </button>
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save</button>
        </div>
        <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->
@endsection
@section('script')
    <script>
        @isset($data)
            document.getElementById("gender").value = {{ $data['gender'] }};
            document.getElementById("desa_id").value = {{ $data['desa_id'] }};

            document.getElementById("konseling").value = {{ $FisikSelected['konseling'] }};
            document.getElementById("rujuk").value = {{ $FisikSelected['rujuk'] }};

            document.getElementById("g_ginjal").value = {{ $GangguanSelected['g_ginjal'] }};
            document.getElementById("g_pengelihatan").value = {{ $GangguanSelected['g_pengelihatan'] }};
            document.getElementById("g_pendengaran").value = {{ $GangguanSelected['g_pendengaran'] }};
            @if ($P3gSelected != null)
                $('#tingkat_kemandirian').val('{{ $P3gSelected['tingkat_kemandirian'] }}').toString();
                $('#g_emosional').val('{{ $P3gSelected['g_emosional'] }}').toString();
                $('#g_kognitiv').val('{{ $P3gSelected['g_kognitiv'] }}').toString();
                $('#p_resiko_malnutrisi').val('{{ $P3gSelected['p_resiko_malnutrisi'] }}').toString();
                $('#p_resiko_jatuh').val('{{ $P3gSelected['p_resiko_jatuh'] }}').toString();
            @endif
        @endisset
    </script>
@endsection
