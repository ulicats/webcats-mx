<!DOCTYPE html>
<html lang="es">
<head>
	<title>Solución, Instalación e Innovación en vidrio y aluminio | Limalum</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="Solución, Instalación e Innovación en vidrio y aluminio | Limalum" />
	<meta property="og:description" content="Ofrecemos servicios de instalación como espejos, puertas de baño, canceles, vitrinas, domos, pasamanos y vidrios templados para diferentes usos." />
	<meta name="description" content="Ofrecemos servicios de instalación como espejos, puertas de baño, canceles, vitrinas, domos, pasamanos y vidrios templados para diferentes usos.">
	<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	<meta property="og:image" content="https://limalum.online/public/images/social.JPG"/>
	<link rel="icon" type="image/png"   href="public/favicon.ico">



	<link rel="stylesheet" type="text/css" href="public/css/app.css">
	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}
			 <link rel="preconnect" href="https://fonts.googleapis.com">
			 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			 <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


	{{-- FB sharing metadata --}}
  {{-- <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://limalum.online"/>
	<meta property="og:title"              content="Solución, Instalación e Innovación en vidrio y aluminio | Limalum"/>
	<meta property="og:description"        content="Ofrecemos servicios de instalación como espejos, puertas de baño, canceles, vitrinas, domos, pasamanos y vidrios templados para diferentes usos."/>
  <meta property="og:image"              content="https://limalum.online/public/images/social.JPG"/>
  <meta name="description" content="Somos una empresa ubicada en Puerto Vallarta, Jalisco, con 10 años de experiencia. Ofrecemos servicios de instalación como espejos, puertas de baño, canceles, vitrinas, domos, pasamanos y vidrios templados para diferentes usos. Trabajamos principalmente en todo el estado de Nayarit." /> --}}

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


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	<link rel="icon" type="image/png"   href="public/images/logo.png">
	<title></title>

	<link rel="stylesheet" type="text/css" href="public/css/app.css">
	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}



	{{-- FB sharing metadata --}}
  {{-- <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://limalum.webcats.mx/"/>
	<meta property="og:title"              content="Solución, instalación e innovación en vidrio y aluminio | Limalum"/>
	<meta property="og:description"        content="Servicios de instalación como espejos, puertas de baño, canceles, vitrinas, domos, pasamanos y vidrios templados para diferentes usos."/>
  <meta property="og:image"              content="https://limalum.webcats.mx/public/images/social.JPG"/>
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
