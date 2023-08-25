<!--begin::details View-->
@if ($data->pemerisaan_lab->last() != null)
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Pemeriksaan Laboratorium Details</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <a href="../../demo1/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
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
        <!--end::Card body-->
    </div>
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
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
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
                        <th class="min-w-125px text-center">Kolesterol</th>
                        <th class="min-w-125px text-center">Gula Darah</th>
                        <th class="min-w-125px text-center">Asam Urat</th>
                        <th class="min-w-125px text-center">Hemoglobin </th>
                        <th class="min-w-125px">Tanggal Pemeriksaan</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($data->pemerisaan_lab as $key => $val)
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
                            <td class="text-center">{{ $val->kolesterol }} mg / dl
                            </td>
                            <!--end::Last login=-->
                            <!--begin::Name=-->
                            <td class="text-center">
                                <a href="#"class="text-dark fw-bolder text-hover-primary fs-6">{{ $val->gula_darah }}
                                    mg / dl</a>
                            </td>
                            <!--end::Name=-->
                            <!--begin::Name=-->
                            <td class="text-center">{{ $val->asam_urat }} mg / dl</td>
                            <!--end::Name=-->
                            <!--begin::Name=-->
                            <td class="text-center">{{ $val->hb }} mg / dl</td>
                            <!--end::Name=-->
                            {{-- <td class="text-center">
                                <a
                                    href="#"class="text-dark fw-bolder text-hover-primary fs-6">{{ $val->g_kognitiv }}</a>
                            </td> --}}
                            <!--begin::Joined-->
                            <td class="text-center">{{ $val->tanggal_p_lab->translatedFormat('d M Y, h:i A') }}
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
@else
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Pemeriksaan Laboratorium Details</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            {{-- <a href="../../demo1/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a> --}}
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <label class="col-lg-12 fw-bold text-muted text-center">Belum ada melakukan pemeriksaan
                laboratorium</label>
        </div>
        <!--end::Card body-->
    </div>
@endif
<!--end::details View-->
