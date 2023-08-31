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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Petugas</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item text-muted">
                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li> --}}
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a href="{{ route('admin') }}">List admin</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item text-dark">Tambah admin</li> --}}
                    @if (isset($data))
                        <li class="breadcrumb-item text-dark">Edit admin</li>
                    @else
                        <li class="breadcrumb-item text-dark">Tambah admin</li>
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
                <h3 class="fw-bolder m-0">Form Admin</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.save') }}" method="POST">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    @if (isset($data))
                        <!--begin::Input group-->
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Image</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image:url('{{ isset($data) ? $data->user->image_url : '' }}');">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" id="image_url" name="image_url" accept=".png, .jpg, .jpeg" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
        
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Username</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="username" id="username"
                                    class="form-control form-control-lg form-control-solid username"
                                    value="{{ $data->user->user_name }}" @error('username') is-invalid @enderror required />
                                @error('username')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                                    placeholder="Budi" @error('name') is-invalid @enderror value="{{ $data->user->name }}" required />
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
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                    placeholder="example@gmail.com" @error('email') is-invalid @enderror value="{{ $data->user->email }}" required />
                                @error('email')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIP</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="nip" class="form-control form-control-lg form-control-solid"
                                    placeholder="1965 1228 1987 192007" @error('nip') is-invalid @enderror required value="{{ $data->user->nip }}" />
                                @error('nip')
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
                                <select name="gender" id="gender" class="form-control form-control-lg form-control-solid" >
                                    <option value="1">Pria</option>
                                    <option value="0">Wanita</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Password</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg form-control-solid" 
                                    @error('password') is-invalid @enderror />
                                @error('password')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
															<i class="bi bi-eye-slash fs-2"></i>
															<i class="bi bi-eye fs-2 d-none"></i>
														</span> --}}
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Password Confirm</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password_confirmation"
                                    class="form-control form-control-lg form-control-solid"  />
                            </div>
                            <!--end::Col-->
                        </div>
                    @else
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Gambar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url(assets/media/avatars/blank.png)">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url(assets/media/avatars/150-26.jpg)"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="image_url" accept=".png, .jpg, .jpeg" />
                                        {{-- <input type="hidden" name="avatar_remove" /> --}}
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name"
                                    class="form-control form-control-lg form-control-solid" placeholder="Budi"
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
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="example@gmail.com" @error('email') is-invalid @enderror required />
                                @error('email')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIP</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="nip"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="1965 1228 1987 192007" @error('nip') is-invalid @enderror required />
                                @error('nip')
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
                                    <option value="1">Pria</option>
                                    <option value="0">Wanita</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Password</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg form-control-solid" required
                                    @error('password') is-invalid @enderror />
                                @error('password')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
															<i class="bi bi-eye-slash fs-2"></i>
															<i class="bi bi-eye fs-2 d-none"></i>
														</span> --}}
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Password Confirm</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password_confirmation"
                                    class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>


                </div>
                @endif



                <!--end::Card body-->

                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"><a
                            href="{{ route('admin') }}">Cancel</a> </button>
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
        $('#image_url').change(function() {
            console.log($('#image_url').val());
        })
    </script>
    <script>
        @isset($data)
            // $('#username').val('{{ $data['user']['username'] }}');
            // $('#name').val('{{ $data['user']['name'] }}');
            $('#image_url').val({{ $data['user']['image_url'] }});
            console.log($('#image_url').val());

            // $('#nip').val('{{ $data['user']['nip'] }}');
            // $('#gender').val('{{ $data['user']['gender'] }}');


            document.getElementById("gender").value = {{ $data['user']['gender'] }};
            //   document.getElementById("image_url").value = {{ $data['user']['image_url'] }};
        @endisset
    </script>
@endsection
