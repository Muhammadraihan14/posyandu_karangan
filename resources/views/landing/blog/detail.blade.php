@extends('landing.layouts.app')
@section('head')
    <title>Blog Detail | Posyandu lansia</title>
    <link href="{{ url('/') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('konten')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container">

        <div class="col-12">
            <!--begin::Post content-->
            <div class="mb-17">
                <!--begin::Wrapper-->
                <div class="mb-8">
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap mb-6">
                        <!--begin::Item-->
                        <div class="me-9 my-1">
                            <span class="fw-bolder text-gray-400">
                                {{  $data->user->name  }} 
                                pada {{ $data->created_at->translatedFormat('d M Y, h:i ') }}
                            </span>
                            <!--end::Label-->
                        </div>
                    </div>
                    <!--end::Info-->
                    <!--begin::Title-->
                    <a href="#" class="text-dark text-hover-primary fs-2 fw-bolder">{{ $data->judul }}</a>
                    <!--end::Title-->
                    <!--begin::Container-->
                    <div class="overlay mt-8">
                        <!--begin::Image-->
                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('{{ asset('/upload/'.$data->image_url) }}')"></div>
                
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Description-->
                <div class="fs-5 fw-bold text-black-600">
                    {!! $data->isi !!}
                </div>
                <!--end::Description-->
                <!--begin::Block-->
                
                <!--end::Block-->
                <!--begin::Icons-->
              
                <!--end::Icons-->
            </div>
            <!--end::Post content-->
        </div>
    </div>
    <!--end::Container-->
</div>
@endsection

