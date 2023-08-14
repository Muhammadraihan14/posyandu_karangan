@extends('layouts.app')
@section('head')
    @if (isset($data))
        <title>Edit | Posyandu lansia</title>
    @else
        <title>Tambah | Posyandu lansia</title>
    @endif
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Desa</h1>
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
                    <li class="breadcrumb-item text-muted"><a href="{{ route('desa') }}">List desa</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item text-dark">Tambah desa</li> --}}
                    @if (isset($data))
                        <li class="breadcrumb-item text-dark">Edit desa</li>
                    @else
                        <li class="breadcrumb-item text-dark">Tambah desa</li>
                    @endif
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--begin::Basic info-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-17">
            <!--begin::Row-->
            <div class="row mb-3">
                <!--begin::Col-->
                <div class="col-md-6 pe-lg-10">
                    <!--begin::Form-->
                    <form action="" class="form mb-15" method="post" id="kt_contact_form">

                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 ps-lg-10">
                    <!--begin::Map-->
                    {{-- <div id="map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div> --}}
                    <!--end::Map-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <!--end::Row-->
            <!--begin::Card-->
            <div class="card mb-4 bg-light text-center">
                <!--begin::Body-->
                <div class="card-body py-12">
                    <!--begin::Icon-->
                    <div id="map" style="height: 486px"></div>
                </div>
                <!--end::Body-->

            </div>
            <!--end::Card-->
            <form action="{{ route('desa.save') }}" method="POST">
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"> Nama lokasi</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukkan nama lokasi" @error('name') is-invalid @enderror required />
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
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Latitude</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="latitude" id="latitude"
                            class="form-control form-control-lg form-control-solid" placeholder="Masukkan latitude"
                            @error('latitude') is-invalid @enderror required />
                        @error('latitude')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"> Longitude</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="longitude" id="longitude"
                            class="form-control form-control-lg form-control-solid" placeholder="Masukkan longitude"
                            @error('longitude') is-invalid @enderror required />
                        @error('longitude')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"><a
                            href="{{ route('admin') }}">Cancel</a> </button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save</button>
                </div>
                <!--end::Actions-->
            </form>

        </div>
        <!--end::Body-->
    </div>
    <!--end::Contact-->
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
    <script>
        // you want to get it of the window global
        const providerOSM = new GeoSearch.OpenStreetMapProvider();

        //leaflet map
        var leafletMap = L.map('map', {
            fullscreenControl: true,
            // OR
            fullscreenControl: {
                pseudoFullscreen: false // if true, fullscreen to page width and height
            },
            minZoom: 2
        }).setView([0, 0], 2);

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leafletMap);

        let theMarker = {};

        leafletMap.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;
            let popup = L.popup()
                .setLatLng([latitude, longitude])
                .setContent("Kordinat : " + latitude + " - " + longitude)
                .openOn(leafletMap);

            if (theMarker != undefined) {
                leafletMap.removeLayer(theMarker);
            };
            theMarker = L.marker([latitude, longitude]).addTo(leafletMap);
        });

        const search = new GeoSearch.GeoSearchControl({
            provider: providerOSM,
            style: 'bar',
            searchLabel: 'Cari lokasi',
        });

        leafletMap.addControl(search);
    </script>
@endsection
