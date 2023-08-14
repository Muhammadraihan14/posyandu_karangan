<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ url('/') }}/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ url('/') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ url('/') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <title>MAP</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
    <style>
        #map {
            height: 90vh;

            /* The height is 400 pixels */
        }
    </style>
</head>

<body>
    <div id="map"></div>
    <div class="container">
        <form action="{{ route('desa.save') }}" method="POST">
            <div class="row mb-5">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold mb-2">Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="nama desa" name="name" />
                    <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <!--end::Label-->
                    <label class="fs-5 fw-bold mb-2">latitude</label>
                    <!--end::Label-->
                    <!--end::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="latitude" name="latitude" id="latitude" />
                    <!--end::Input-->
                </div>
                <!--end::Col-->
                <div class="col-md-6 fv-row">
                    <!--end::Label-->
                    <label class="fs-5 fw-bold mb-2">longitude</label>
                    <!--end::Label-->
                    <!--end::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="longitude" name="longitude" id="longitude" />
                    <!--end::Input-->
                </div>
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save</button>

            </div>
        </form>

    </div>

</body>
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
        let location = e.latlng.lng.toString().substring(0, 15);
  
        let popup = L.popup()
            .setLatLng([latitude, longitude])
            .setContent("Kordinat : " + latitude + " - " + longitude)
            .openOn(leafletMap);

        if (theMarker != undefined) {
            leafletMap.removeLayer(theMarker);
        };
        theMarker = L.marker([latitude, longitude]).addTo(leafletMap);
        document.getElementById("latitude").value = latitude;
        document.getElementById("longitude").value = longitude;
    });

    const search = new GeoSearch.GeoSearchControl({
        provider: providerOSM,
        style: 'bar',
        searchLabel: 'Cari lokasi',
    });

    leafletMap.addControl(search);
</script>

<script>
    <!--begin::Javascript
    -->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ url('/') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ url('/') }}/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ url('/') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ url('/') }}/assets/js/custom/widgets.js"></script>
<script src="{{ url('/') }}/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{ url('/') }}/assets/js/custom/modals/create-app.js"></script>
<script src="{{ url('/') }}/assets/js/custom/modals/upgrade-plan.js"></script>
<!--end::Page Custom Javascript-->
</script>

</html>
