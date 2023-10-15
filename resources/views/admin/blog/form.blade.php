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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Blog</h1>
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
                    <li class="breadcrumb-item text-muted"><a href="{{ route('blog') }}">List Blog</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item text-dark">Tambah admin</li> --}}
                    @if (isset($data))
                        <li class="breadcrumb-item text-dark">Edit blog</li>
                    @else
                        <li class="breadcrumb-item text-dark">Tambah blog</li>
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
                <h3 class="fw-bolder m-0">Form Blog</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form class="form" action="{{ route('blog.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    @if (isset($data))
                        <!--begin::Input group-->
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Gambar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image:url('{{ asset('/upload/'.$data->image_url) }}');">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="image_url" id="image_url"/>
                                        
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
                                @error('image_url')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Judul</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="judul" value="{{ $data->judul }}"
                                    class="form-control form-control-lg form-control-solid" placeholder="Masukan Judul"
                                    @error('judul') is-invalid @enderror required />
                                @error('judul')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Konten</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <textarea name="isi" id="isi" rows="4" cols="50">
                                    @isset($data)
                                    {!! $data->isi !!}
                                    @endisset
                            </textarea>
                                @error('isi')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                
                    @else
                        <!--begin::Input group-->
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
                                        <input type="file" name="image_url" id="image_url"/>
                                        
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
                                @error('image_url')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Judul</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="judul"
                                    class="form-control form-control-lg form-control-solid" placeholder="Masukan Judul"
                                    @error('judul') is-invalid @enderror required />
                                @error('judul')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Konten</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <textarea name="isi" id="isi" rows="4" cols="50">
                                    @isset($data)
                                    {!! $data->isi !!}
                                    @endisset
                            </textarea>
                                @error('isi')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>


                </div>
                @endif



                <!--end::Card body-->

                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"><a
                            href="{{ route('blog') }}">Cancel</a> </button>
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


    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        type="text/javascript"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        $().ready(function() {
            $("#form_blog").validate({
                ignore: [],
                rules: {
                    isi: {
                        required: true,
                    },
                },
                messages: {
                    isi: {
                        required: "",
                    },
                },
            });
        });
    </script>S
@endsection
