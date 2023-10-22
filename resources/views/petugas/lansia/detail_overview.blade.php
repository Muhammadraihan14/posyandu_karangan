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
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Gangguan Ginjal</label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_ginjal : '-' }}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Gangguan Penglihatan</label>
            <div class="col-lg-8 fv-row">
                <span  class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_pengelihatan : '-' }}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Gangguan Pendengaran</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->g_pendengaran : '-' }}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Penyuluhan</label>
            <div class="col-lg-8 fv-row">
                <span  class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->penyuluhan : '-' }}</span>
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
                <span class="fw-bold text-gray-800 fs-6">{{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->keterangan : '-' }}</span>
            </div>
        </div>


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
        <a data-bs-toggle="modal" data-bs-target="#kt_modal_new_gangguan"
            class="btn btn-primary align-self-center">Tambah</a>
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
                    {{-- <th class="min-w-125px text-center">penyuluhan</th> --}}
                    {{-- <th class="min-w-125px text-center">penilaian kognitif</th> --}}
                    <th class="min-w-125px">Tanggal Pemeriksaan</th>
                    <th class="text-center min-w-70px">Actions</th>
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
                        {{-- <td class="text-center">{{ $val->penyuluhan }}</td> --}}
                        <!--end::Name=-->
                        <!--begin::Joined-->
                        <td class="text-center">{{ $val->created_at->translatedFormat('d M Y, h:i A') }}
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
                                    <a data-bs-toggle="modal" data-bs-target="#kt_modal_new_gangguan"
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

<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Charts Widget 1-->
        <div class="card card-xl-stretch mb-xl-10">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Recent Statistics</span>
                    <span class="text-muted fw-bold fs-7">More than 400 new members</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5"
                                        rx="1" fill="#000000" />
                                    <rect x="14" y="5" width="5" height="5"
                                        rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5"
                                        rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5"
                                        rx="1" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_618d2f4cf3d0f">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option" data-dropdown-parent="#kt_menu_618d2f4cf3d0f"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2"
                                            checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value=""
                                        name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Charts Widget 1-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::List Widget 5-->
        <div class="card card-xl-stretch mb-xl-10">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bolder mb-2 text-dark">Aktifitas Pemeriksaaan</span>
                    <span class="text-muted fw-bold fs-7">{{ $data->riwayat_gangguan->count() }}
                        Pemeriksaaan</span>
                </h3>
                <div class="card-toolbar">
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5 card-scroll h-200px">
                <!--begin::Timeline-->
                <div class="timeline-label">
                    <!--begin::Item-->
                    @foreach ($data->riwayat_gangguan as $val)
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">
                                {{ $val->created_at->translatedFormat('h:i A') }}</div>

                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-warning fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-mormal timeline-content text-muted ps-3">
                                {{ $val->created_at->format('d M Y') }}</div>
                            <div class="fw-mormal timeline-content text-dark-800 ps-3">Diperiksa oleh :
                                {{ $data->riwayat_gangguan->last()->user->name }}</div>
                            <!--end::Text-->
                        </div>
                    @endforeach
                </div>
                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end: List Widget 5-->
    </div>
    <!--end::Col-->
</div>


<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_gangguan" tabindex="-1" aria-hidden="true">
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
                <!--begin:Form-->
                <form method="POST" action="{{ route('lansia.save.g') }}" class="form"  enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->
										<input type="hidden" name="petugas_id" id="petugas_id" value="{{ Auth::user()->id }}">
										<input type="hidden" name="lansia_id" id="lansia_id" value="{{ $data->id }}">

                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Pemeriksaan Gangguan Lansia</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        {{-- <div class="text-muted fw-bold fs-5">If you need more info, please check
                                                <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div> --}}
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Gangguan Ginjal</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        {{-- <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" /> --}}
                        <select name="g_ginjal" id="g_ginjal"  class="form-control form-control-lg form-control-solid " required>
                            <option></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Gangguan Penglihatan</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        {{-- <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" /> --}}
                        <select name="g_pengelihatan" id="g_pengelihatan"
                            class="form-control form-control-lg form-control-solid" required>
                            <option></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Gangguan Pendengaran</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        {{-- <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" /> --}}
                        <select name="g_pendengaran" id="g_pendengaran"
                            class="form-control form-control-lg form-control-solid" required>
                            <option></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Penyuluhan</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" name="penyuluhan"
                            id="penyuluhan" placeholder="Penyuluhan" @error('penyuluhan') is-invalid @enderror
                            required />
                        @error('penyuluhan')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pemberdayaan</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" name="pemberdayaan"
                            id="pemberdayaan" placeholder="pemberdayaan" @error('pemberdayaan') is-invalid @enderror
                            required />
                        @error('pemberdayaan')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
	
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-8">
											<label class="fs-6 fw-bold mb-2">Keterangan</label>
											<textarea class="form-control form-control-solid" rows="3" name="keterangan" id="keterangan" placeholder="Masukan Keterangan"></textarea>
									</div>
                    <!--begin::Actions-->
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
