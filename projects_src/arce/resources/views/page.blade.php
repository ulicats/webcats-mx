<!DOCTYPE html>
<html lang="es">
<head>
	<title>Arce Cabañas Mazamitla</title>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Arce Cabañas Mazamitla">
		<meta property="og:site_name" content="Arce Cabañas Mazamitla">
		<meta name="author" content="Webcats">
		<meta property="og:description" content="Un lugar único, pensado para desconectarse de todo y relajarse en medio de la naturaleza en nuestras cabañas.
		Visitanos en mazamitla y disfruta de la experiencia uy maravíllate con la increible vista que ofrece esta hermosa cabaña." />
		<meta name="description" content="Un lugar único, pensado para desconectarse de todo y relajarse en medio de la naturaleza.
		Visitanos y disfruta de la experiencia uy maravíllate con la increible vista que ofrece esta hermosa cabaña.">
		<meta name="keywords" content="Cabañas en mazamitla, arce cabañas mazamitla, cabañas mazamitla, cabañas en méxico, cabañas arce mazamitla, renta de cabañas en mazamitla, cabañas, arce cabañas"/>
		<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	  <meta name="distribution" content="global"/>
		<meta name="rating" content="general">
		<meta name="robots" content="index, follow">
		<meta property="og:image" content="https://arcecabanasmazamitla.com/public/images/assets/logo_arce.png"/>
		<link rel="icon" type="image/png"   href="public/images/assets/logo_arce.png">

		<link rel="shortcut icon" href="public/images/assets/logo_arce.png">
		<link rel="apple-touch-icon" href="public/images/assets/logo_arce.png">


	<link rel="stylesheet" type="text/css" href="public/css/app.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}

	{{-- FB sharing metadata --}}
  <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://arcecabanasmazamitla.com/"/>
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Arce Cabañas Mazamitla"/>
	<meta property="og:description"        content="Un lugar único, pensado para desconectarse de todo y relajarse en medio de la naturaleza.
	Visitanos y disfruta de la experiencia uy maravíllate con la increible vista que ofrece estas hermosas cabañas."/>
  <meta property="og:image"              content="https://arcecabanasmazamitla.com/public/images/assets/logo_arce.png"/>
  <meta name="description" content="Un lugar único, pensado para desconectarse de todo y relajarse en medio de la naturaleza.
	Visitanos y disfruta de la experiencia uy maravíllate con la increible vista que ofrece esta hermosa cabaña." />


	<!-- G+ -->
<meta itemprop="name" content="Arce Cabañas Mazamitla">
<meta itemprop="description" content="Arce Cabañas Mazamitla">
<meta itemprop="image" content="Arce Cabañas Mazamitla">


	@include('shared.jsDir')
</head>

<body>
	<div id="app">
		<vue-topprogress ref="loadingBar" color="yellow" :height="2"></vue-topprogress>
		<my-header></my-header>
		<router-view></router-view>
		<my-footer></my-footer>
	</div>

	<script type="text/javascript" src="public/js/app.js"></script>
</body>

</html>
