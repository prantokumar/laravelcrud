<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets ============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/magnific-popup.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Stylesheets End============================================= -->

	<!-- Document Title ============================================= -->
    <title>FrontEnd</title>
    <!-- Document Title End ============================================= -->
</head>

<body class="stretched">
    @include('frontend.page_layout.header')
    @yield('content')
    @include('frontend.page_layout.footer')
	<!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <!-- Go To End ============================================= -->

	<!-- External JavaScripts ============================================= -->
	<script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('public/frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('public/frontend/js/functions.js') }}"></script>
    <!-- External JavaScripts End============================================= -->

</body>
</html>