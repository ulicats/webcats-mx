<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content ="{!!csrf_token()!!}" />
	<link rel="icon" type="image/png"   href="public/images/karen.jpeg">
	<title>Nutrición</title>

	<link rel="stylesheet" type="text/css" href="public/css/app.css">
	{{-- <link rel="stylesheet" type="text/css" href="public/extras/css/font-awesome/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" type="text/css"> --}}

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ysabeau&display=swap" rel="stylesheet">

	{{-- FB sharing metadata --}}
  {{-- <meta name="robots" content="NOODP">
	<meta property="og:url"                content="https://xxx.xxx/"/>
	<meta property="og:title"              content="Nutrición"/>
	<meta property="og:description"        content="Nitriología"/>
  <meta property="og:image"              content="https://xxx.xxx/public/images/social.jpg"/>
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
