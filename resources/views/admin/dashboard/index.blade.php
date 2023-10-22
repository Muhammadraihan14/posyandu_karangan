@extends('layouts.app')
@section('head')
    @if (Auth::user()->user_type == 'admin')
        <title>Admin | Posyandu lansia</title>
    @else
        <title>Petugas | Posyandu lansia</title>
    @endif
@endsection

@section('konten')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    </h1>
                    <!--end::Title-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 2-->
                        <div class="card card-xl-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 bg-danger py-5">
                                <h3 class="card-title fw-bolder text-white">Portal Posyandu</h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <!--begin::Chart-->
                                <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger"
                                    style="height: 100px"></div>
                                <!--end::Chart-->
                                <!--begin::Stats-->
                                <div class="card-p mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-0 text-center">
                                        <!--begin::Col-->
                                        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                            <p class="lead text-warning fw-bold h5">{{ $TLansia }}</p>
                                            <a href="{{ route('lansia') }}" class="text-warning  fw-bold fs-6">Total Lansia</a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                          <p class="lead text-primary fw-bold h5">{{ $TPetugas }}</p>
                                            <a href="{{ route('petugas') }}" class="text-primary fw-bold fs-6">Total Petugas</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row g-0 text-center">
                                        <!--begin::Col-->
                                        <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                          <p class="lead text-danger fw-bold h5">{{ $TDesa }}</p>
                                            <a href="{{ route('desa') }}" class="text-danger fw-bold fs-6 mt-2">Total Desa</a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-success px-6 py-8 rounded-2">
                                          <p class="lead text-danger fw-bold h5">{{ $TBlog }}</p>
                                            <a href="{{ route('blog') }}" class="text-success fw-bold fs-6 mt-2">Total Blog</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::List Widget 5-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8 ">
                            <div class="card-body  pt-5">
                                {!! $data['klChart']->container() !!}
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->

                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::List Widget 3-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <div class="card-body">
                                {!! $data['stChart']->container() !!}

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end:List Widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-body">
                                {!! $data['jkChart']->container() !!}

                            </div>
                            <!--begin::Body-->
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--end::Modal - New Product-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
@section('script')
<script src="{{ $data['klChart']->cdn() }}"></script>
{{ $data['klChart']->script() }}

<script src="{{ $data['jkChart']->cdn() }}"></script>
{{ $data['jkChart']->script() }}

<script src="{{ $data['stChart']->cdn() }}"></script>
{{ $data['stChart']->script() }}
@endsection

