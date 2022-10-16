<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="">
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="{{ app()->getLocale() }}" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="@yield('title')" />
		<meta property="og:url" content="@yield('url')" />
		<meta property="og:site_name" content="Zholda" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="bg-body">
        @section('body')
        @show

        @section('js')
		<script>var hostUrl = "assets/";</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
        @show
	</body>
</html>