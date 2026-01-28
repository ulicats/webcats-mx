<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Consulta de nutrición personalizada para pacientes con Sobrepeso, Obesidad, Diabetes, Hipertensió">
	<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	<meta property="og:image" content="https://erik.webcats.mx/public/images/assets/web_logo.png"/>
	<link rel="icon" type="image/png"   href="public/images/assets/web_logo.png">
	<title>Dr. Erik Gutiérrez | Cirujano Oncólogo en Tepic Nayarit </title>

	<link rel="stylesheet" type="text/css" href="public/css/app.css">
	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@100..800&family=Carrois+Gothic&family=Dancing+Script&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Luckiest+Guy&family=Quicksand&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen&display=swap" rel="stylesheet">


	{{-- FB sharing metadata --}}
  {{-- <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://erik.webcats.mx"/>
	<meta property="og:title"              content="Dr. Erik Gutiérrez | Cirujano Oncólogo en Tepic Nayarit "/>
	<meta property="og:description"        content="La Oncología es la rama de la medicina especializada en el diagnóstico y tratamiendo del cáncer."/>
  <meta property="og:image"              content="https://erik.webcats.mx/public/images/assets/web_logo.png"/>
  <meta name="description" content="" /> --}}

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
