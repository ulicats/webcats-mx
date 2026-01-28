<!DOCTYPE html>
<html lang="es">
<head>
	<title>Dermatología Clínica, Estética y Quirúrgica | Dermatóloga Ale Romero </title>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Ale Romero Dermatóloga">
		<meta property="og:site_name" content="Ale Romero Dermatóloga">
		<meta name="author" content="Webcats">
		<meta property="og:description" content="Dermatología Clínica, Estética y Quirúrgica" />
		<meta name="description" content="Ale Romero Dermatóloga, Dermatología clínica, estética y quirúrgica">
		<meta name="keywords" content="Dermatología clínica, estética y quirúrgica"/>
		<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	  <meta name="distribution" content="global"/>
		<meta name="rating" content="general">
		<meta name="robots" content="index, follow">
		<meta property="og:image" content="https://derma.webcats.mx/public/images/social.JPG"/>
		<link rel="icon" type="image/png"   href="public/images/social.JPG">

		<link rel="shortcut icon" href="public/images/social.JPG">
		<link rel="apple-touch-icon" href="public/images/social.JPG">


	<link rel="stylesheet" type="text/css" href="public/css/app.css">


		<link rel="stylesheet" type="text/css" href="public/css/app.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@100..800&family=Carrois+Gothic&family=Dancing+Script&family=Luckiest+Guy&family=Quicksand&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen&display=swap" rel="stylesheet">

	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}

	{{-- FB sharing metadata --}}
  <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://derma.webcats.mx/"/>
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Ale Romero Dermatóloga"/>
	<meta property="og:description"        content="Dermatología Clínica, Estética y Quirúrgica"/>
  <meta property="og:image"              content="https://derma.webcats.mx/public/images/social.JPG"/>
  <meta name="description" content="Dermatología Clínica, Estética y Quirúrgica" />


	<!-- G+ -->
<meta itemprop="name" content="Ale Romero Dermatóloga">
<meta itemprop="description" content="Ale Romero Dermatóloga">
<meta itemprop="image" content="Ale Romero Dermatóloga">


	@include('shared.jsDir')
</head>

<body>
	<div id="app">
		<vue-topprogress ref="loadingBar" color="blue" :height="2"></vue-topprogress>
		<my-header></my-header>
		<router-view></router-view>
		<my-footer></my-footer>
	</div>

	<script type="text/javascript" src="public/js/app.js"></script>
</body>

</html>
