<!DOCTYPE html>
<html lang="es">
<head>
	<title>WL Capital | Fondeo para SOFOMES, créditos empresariales y creditos para la construcción</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	<meta name="description" content="Somos tu enlace financiero para hacer crecer tu negocio, Aliados con las mejores instituciones financieras de América logramos realizar el match entre nuestros clientes y fondeadores para estructurar financiamientos a la medida de los requerimientos de tu empresa.">
	<meta property="og:title" content="White Lotus Capital">
	<meta property="og:description" content="Somos tu enlace financiero para hacer crecer tu negocio, Aliados con las mejores instituciones financieras de América logramos realizar el match entre nuestros clientes y fondeadores para estructurar financiamientos a la medida de los requerimientos de tu empresa." />
	<meta property="og:image" content="https://wlc.webcats.mx/public/images/social.JPG"/>
	<link rel="icon" type="image/png"   href="public/favicon.ico">


	<link rel="stylesheet" type="text/css" href="public/css/app.css">
	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Questrial&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

	{{-- FB sharing metadata --}}
  {{-- <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://wlc.webcats.mx/"/>
	<meta property="og:title"              content="White Lotus Capital"/>
	<meta property="og:description"        content="Somos tu enlace financiero para hacer crecer tu negocio, Aliados con las mejores instituciones financieras de América logramos realizar el match entre nuestros clientes y fondeadores para estructurar financiamientos a la medida de los requerimientos de tu empresa."/>
  <meta property="og:image"              content="https://wlc.webcats.mx/public/images/social.JPG"/>
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
