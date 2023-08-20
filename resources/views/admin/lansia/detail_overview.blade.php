<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Lansia Details</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a href="../../demo1/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
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
        <!--end::Input group-->
        <!--begin::Input group-->
        <!--end::Input group-->


    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Gangguan</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        {{-- <a href="../../demo1/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a> --}}
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Gangguan Ginjal</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span
                    class="fw-bolder fs-6 text-gray-800">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_ginjal : '-' }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Gangguan Penglihatan</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span
                    class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_pengelihatan : '-' }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Gangguan Pendengaran</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span
                    class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_pendengaran : '-' }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Penyuluhan</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span
                    class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->penyuluhan : '-' }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Pemberdayaan</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span
                    class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->pemberdayaan : '-' }}</span>
            </div>
            <!--end::Col-->
        </div>
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Keterangan</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span
                    class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->keterangan : '-' }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <!--end::Input group-->


    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
{{-- ======================= --}}
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-customer-table-filter="search"
                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a href="../../demo1/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
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
                    {{-- <th class="min-w-125px">judul</th>
													<th class="min-w-125px">creator</th>
													<th class="min-w-125px">Created</th> --}}
                    <th class="min-w-125px text-center">Gangguan Ginjal</th>
                    <th class="min-w-125px text-center">Gangguan Pengelihatan</th>
                    <th class="min-w-125px text-center">Gangguan Pendengaran</th>
                    <th class="min-w-125px text-center">penyuluhan</th>
                    {{-- <th class="min-w-125px text-center">penilaian kognitif</th> --}}
                    <th class="min-w-125px">Tanggal Pemeriksaan</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
                @foreach ($data->riwayat_gangguan as $key => $val)
                    <tr>
                        <!--begin::Checkbox-->
                        <!--begin::nomor-->
                        <td>
                            <div class="fs-7 text-dark fw-bolder">
                                {{-- {{ $key + $data->p3g->firstItem() }} --}}
                                {{ $loop->iteration }}
                            </div>
                        </td>
                        <!--end::nomor-->
                        <!--end::Checkbox-->
                        <!--begin::Email=-->
                        <td class="text-center">{{ $val->g_ginjal }}
                        </td>
                        <!--end::Last login=-->
                        <!--begin::Name=-->
                        <td class="text-center">
                            <a
                                href="#"class="text-dark fw-bolder text-hover-primary fs-6">{{ $val->g_pengelihatan }}</a>
                        </td>
                        <!--end::Name=-->
                        <!--begin::Name=-->
                        <td class="text-center">{{ $val->g_pendengaran }}</td>
                        <!--end::Name=-->
                        <!--begin::Name=-->
                        <td class="text-center">{{ $val->penyuluhan }}</td>
                        <!--end::Name=-->
                        <!--begin::Joined-->
                        <td class="text-center">{{ $val->created_at->translatedFormat('d M Y, h:i A') }}
                        </td>
                        <!--end::Email=-->
                        <!--begin::Company=-->
                        {{-- <td>{{ $val->user->nip }}</td> --}}
                        <!--end::Company=-->
                        <!--begin::Payment method=-->
                        <!--end::Date=-->
                        <!--begin::Action=-->
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
                                    <a href="{{ route('blog.edit', ['id' => $val->id]) }}"
                                        class="menu-link px-3">Edit</a>
                                </div>
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ route('blog.detail', ['id' => $val->id]) }}"
                                        class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3 deleteMember"
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
    </div>
    <!--end::Card body-->
</div>
{{-- ======================= --}}
