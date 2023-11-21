
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Posyandu Lansia | Karangan</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ url('/') }}/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ url('/') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
		<style>
			#Berita p {
				text-indent: 30px;
				width: 320px;
				height: 20px;
				overflow: hidden;
				text-overflow: ellipsis;
			}

			#blogss   div {
        /* border: black solid;
        width: 400px;
        height: 400px; */
        }

        #Berita div  img {
            width: 100%;
            height: 100%;
            object-fit: cover
            background-repeat: no-repeat;
            }
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="home" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ url('/') }}/assets/media/svg/illustrations/landingP.svg);  background-size: auto;">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="#">
										<img alt="Logo" src="{{ url('/') }}/assets/media/logo/lg2.png" class="logo-default h-45px h-lg-100px" />
										{{-- <img alt="Logo" src="{{ url('/') }}/assets/media/logos/logo-landing-dark.svg" class="logo-sticky h-20px h-lg-25px" /> --}}
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#home', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
	
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#data" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Data Lansia</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Berita" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#kontak" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('login') }}" class="btn btn-success">Masuk</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">
						<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Posyandu Lansia</span>
							</span>	
							Karangan  
							</h1>
						</div>
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2" id="data">
				<div class="mb-13 text-center">
					<h1 class="fs-2hx fw-bolder text-black mb-3" data-kt-scroll-offset="{default: 100, lg: 150}">Data Lansia Posyandu Karangan</h1>
					<div class="text-gray-600 fw-bold fs-5">Data Lansia terbaru dari Posyandu Karangan</div>
				</div>
				<!--begin::Container-->
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-xl-stretch mb-xl-8 ">
								<div class="card-body">
									{!! $data['stChart']->container() !!}
								</div>
								<!--end::Body-->
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<!--begin::Tables Widget 9-->
							<div class="card card-xl-stretch mb-xl-8 ">
								<div class="card-body">
									{!! $data['mlChart']->container() !!}
								</div>
								<!--begin::Body-->
							</div>
							<!--end::Tables Widget 9-->
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-xl-stretch mb-xl-8 ">
								<div class="card-body">
									{!! $data['gdChart']->container() !!}
								</div>
								<!--end::Body-->
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<!--begin::Tables Widget 9-->
							<div class="card card-xl-stretch mb-xl-8 ">
								<div class="card-body">
									{!! $data['koChart']->container() !!}
								</div>
								<!--begin::Body-->
							</div>
							<!--end::Tables Widget 9-->
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-xl-stretch mb-xl-8 ">
								<div class="card-body">
									{!! $data['tkChart']->container() !!}
								</div>
								<!--end::Body-->
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<!--begin::Tables Widget 9-->
							<div class="card card-xl-stretch mb-xl-8 ">
								<div class="card-body">
									{!! $data['asChart']->container() !!}
								</div>
								<!--begin::Body-->
							</div>
							<!--end::Tables Widget 9-->
						</div>
					</div>
				</div>

				<div class="container">

					<div id="map" style="width: 100%; height: 400px;"></div>
					<!--end::Row-->
					<!--begin::Product slider-->
					<div class="tns tns-default">
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							{{-- <span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span> --}}
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
							{{-- <span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
								</svg>
							</span> --}}
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
					</div>
					<!--end::Product slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<!--begin::Statistics Section-->
			<div class="mt-sm-n10">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-dark-bg">
			<div class="py-10 py-lg-20">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-12">
						<!--begin::Title-->
						<h3 class="fs-2hx text-white mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Tenaga Medis</h3>
						<!--end::Title-->
						<!--begin::Sub-title-->
						<div class="fs-5 text-muted fw-bold">" Dedikasi Kami Untuk Kesejahteraan Lansia "</div>
						<!--end::Sub-title=-->
					</div>
					<!--end::Heading-->
					<!--begin::Slider-->
					<div class="tns tns-default">
					<!--begin::Wrapper-->
						<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
							<!--begin::Item-->
							@foreach ($petugas as $dt )
							<div class="text-center">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('/upload/'.$dt->user->image_url) }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-white fw-bolder text-hover-primary fs-3">{{ $dt->user->name }}</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-bold mt-1">{{ $dt->jabatan }}</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
						@endforeach

						</div>
						<!--end::Wrapper-->						
	
						<!--begin::Button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Button-->
					</div>
					<!--end::Slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Team Section-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->

			<!--begin::Projects Section-->
			<div class="mb-lg-n15 position-relative z-index-2 mt-5" id="Berita">
				<!--begin::Container-->
				<div class="mb-13 text-center">
					<h1 class="fs-2hx fw-bolder text-black mb-3" data-kt-scroll-offset="{default: 100, lg: 150}">Berita Posyandu Karangan</h1>
					<div class="text-gray-600 fw-bold fs-5">Berita dan informasi terbaru dari Posyandu Karangan</div>
				</div>
				<div class="container">
				
					<div class="row w-100 gy-10 mb-md-20">
						@foreach ($blg as $dt )
						<div class="col-md-4">
							<!--begin::Feature post-->
							<div class="card-xl-stretch me-md-6">
								<!--begin::Image-->
								<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('{{ asset('/upload/'.$dt->image_url) }}')" href="{{ route('blog-list.detail', ['id' => $dt->id]) }}">
									<img src="{{ asset('/upload/'.$dt->image_url) }}" class="position-absolute top-50 start-50 translate-middle " alt="" />
								</a>
								<!--end::Image-->
								<!--begin::Body-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $dt->judul }}</a>
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
					<div class="text-gray-600 fw-bold fs-5 text-end"><a href="{{ Route('blog-list') }}">Selengkapnya</a></div>

				</div>
				<br>
				<br>
				<!--end::Container-->
			</div>
			<!--end::Testimonials Section-->
			<!--begin::Footer Section-->
			<div class="mb-0"  id="kontak">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
								<!--begin::Contact-->
								{{-- <div class="card"> --}}
									<!--begin::Body-->
									{{-- <div class="card-body p-lg-17"> --}}
										<!--begin::Row-->
										<div class="row mb-3">
											<div class="col-md-12">
												<!--begin::Map-->
												<div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px">
													<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2372.2462427867827!2d109.38067145535832!3d0.5615096056924708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e2d7f8e4b0ff77%3A0x397f889c928d63eb!2sPuskesmas%20Karangan!5e0!3m2!1sid!2sid!4v1697792635814!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
												</div>
												<!--end::Map-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Row-->
										<div class="row g-5 mb-5 mb-lg-15">
											<!--begin::Col-->
											<div class="col-sm-6 pe-lg-10">
												<!--begin::Phone-->
												<div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
													<!--begin::Icon-->
													<!--SVG file not found: icons/duotune/finance/fin006.svgPhone.svg-->
													<!--end::Icon-->
													<!--begin::Subtitle-->
													<h1 class="text-dark fw-bolder my-5">Kontak</h1>
													<!--end::Subtitle-->
													<!--begin::Number-->
													<div class="text-gray-700 fw-bold fs-2">1 (833) 597-7538</div>
													<!--end::Number-->
												</div>
												<!--end::Phone-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-sm-6 ps-lg-10">
												<!--begin::Address-->
												<div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
													<span class="svg-icon svg-icon-3tx svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
															<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Subtitle-->
													<h1 class="text-dark fw-bolder my-5">Alamat</h1>
													<!--end::Subtitle-->
													<!--begin::Description-->
													<div class="text-gray-700 fs-3 fw-bold">Karangan, Kec. Mempawah Hulu, Kabupaten Landak, Kalimantan Barat 79362</div>
													<!--end::Description-->
												</div>
												<!--end::Address-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Card-->
										<div class="card mb-4 bg-light text-center">
											<!--begin::Body-->
											<div class="card-body py-12">
												<!--begin::Icon-->
												<a href="https://www.facebook.com/profile.php?id=100013373650963" class="mx-4">
													<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
												<!--begin::Icon-->
												<a href="#" class="mx-4">
													<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
												<!--begin::Icon-->
												<a href="#" class="mx-4">
													<img src="assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
												<!--begin::Icon-->
												<a href="#" class="mx-4">
													<img src="assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
												<!--begin::Icon-->
												<a href="#" class="mx-4">
													<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
												<!--begin::Icon-->
												<a href="#" class="mx-4">
													<img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
												<!--begin::Icon-->
												<a href="#" class="mx-4">
													<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="" />
												</a>
												<!--end::Icon-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									{{-- </div> --}}
									<!--end::Body-->
								{{-- </div> --}}
								<!--end::Contact-->
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								{{-- <a href="../../demo1/dist/landing.html">
									<img alt="Logo" src="{{ url('/') }}/assets/media/logos/logo-landing.svg" class="h-15px h-md-20px" />
								</a> --}}
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="#">© 2021 Keenthemes Inc.</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a href="#" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item mx-5">
									{{-- <a href="#" target="_blank" class="menu-link px-2">Support</a> --}}
								</li>
								<li class="menu-item">
									{{-- <a href="" target="_blank" class="menu-link px-2">Purchase</a> --}}
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "{{ url('/') }}/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ url('/') }}/assets/plugins/global/plugins.bundle.js"></script>
		<script src="{{ url('/') }}/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ url('/') }}/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="{{ url('/') }}/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ url('/') }}/assets/js/custom/landing.js"></script>
		<script src="{{ url('/') }}/assets/js/custom/pages/general/pricing.js"></script>


		<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
		<!--end::Page Custom Javascript-->
		<script>

	
		var peta1 = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
							maxZoom: 20,
							subdomains:['mt0','mt1','mt2','mt3']
					});
		var peta2 = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
							maxZoom: 20,
							subdomains:['mt0','mt1','mt2','mt3']
						});
		var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
							});
		var peta4 = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
						maxZoom: 20,
						subdomains:['mt0','mt1','mt2','mt3']
						});

		var map = L.map('map', {
			center: [39.73, -104.99],
			zoom: 10,

			layers: [peta1, peta2, peta3, peta4]
			}).setView([0.5911536716372799, 109.36672030833822 , 13]);
		var baseMaps = {
			"Terrain": peta1,
			"Hybrid": peta2,
			"Streets": peta3,
			"Satellite": peta4,
		};
		var layerControl = L.control.layers(baseMaps).addTo(map);
		@isset($desa)
			@foreach ($desa as $dt)
				
				L.marker([{{ $dt->latitude }}, {{ $dt->longitude }}]).bindPopup(
					"<h5>Desa :{{ $dt->name }}</h5>Status Gizi Lebih : {{ $dt->jumlah_statusgizi_lebih }} <br> Status Gizi Normal : {{ $dt->jumlah_statusgizi_normal }} <br> Status Gizi Kurang : {{ $dt->jumlah_statusgizi_kurang }}").addTo(map);
			@endforeach
		@endisset

		
		</script>

		<script src="{{ $data['stChart']->cdn() }}"></script>
		{{ $data['stChart']->script() }}

		<script src="{{ $data['mlChart']->cdn() }}"></script>
		{{ $data['mlChart']->script() }}
		


		<script src="{{ $data['gdChart']->cdn() }}"></script>
		{{ $data['gdChart']->script() }}

		<script src="{{ $data['koChart']->cdn() }}"></script>
		{{ $data['koChart']->script() }}
		
		<script src="{{ $data['asChart']->cdn() }}"></script>
		{{ $data['asChart']->script() }}

		<script src="{{ $data['tkChart']->cdn() }}"></script>
		{{ $data['tkChart']->script() }}
	</body>
	<!--end::Body-->
</html>