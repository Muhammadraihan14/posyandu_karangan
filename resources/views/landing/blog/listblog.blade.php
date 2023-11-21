@extends('landing.layouts.app')
@section('head')
    <title>Blog List | Posyandu lansia</title>
    <link href="{{ url('/') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('konten')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container">
        <div class="row w-100 gy-10 mb-md-20" id="blogss">
            @foreach ($blog as $dt)
            <div class="col-md-4">
                <!--begin::Feature post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')"  href="{{ route('blog-list.detail', ['id' => $dt->id]) }}">
                        <img src="{{ asset('/upload/'.$dt->image_url) }}" class="position-absolute top-50 start-50 translate-middle " alt="" />
                    </a>
                    <!--end::Image-->
                    <!--begin::Body-->
                    <div class="m-0">
                        <!--begin::Title-->
                        <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $dt->judul }}</a>
                        <!--end::Title-->
                        <!--begin::Text-->
                        {{-- <div class="fw-bold fs-5 text-gray-600 text-dark my-4">
                            <p>
                                {!! $dt->isi !!}
                            </p>
                        </div> --}}
                        <!--end::Text-->
                        <!--begin::Content-->
                        <div class="fs-6 fw-bolder">
                            <!--begin::Author-->
                            <a href="#" class="text-gray-700 text-hover-primary">Jane Miller</a>
                            <!--end::Author-->
                            <!--begin::Date-->
                            <span class="text-muted">{{  $dt->user->name  }} 
                                <br>
                                pada {{ $dt->created_at->translatedFormat('d M Y, h:i ') }}</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Feature post-->
            </div>
            @endforeach
        </div>	
        {{ $blog->links() }}

    </div>
    <!--end::Container-->
</div>
@endsection

