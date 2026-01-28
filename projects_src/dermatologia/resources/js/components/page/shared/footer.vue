<template>
	<footer id="footer" class="pt-4">

		<a class="appWhatsapp" target="_blank" href="https://wa.me/523332341375">
		<img src="public/images/assets/whatsapp.png" alt="">
	</a>

		<div class="container h-100">
			<div class="row h-100 align-items-center text-center">
				<div class="col-md-3">
					<router-link class="logo" to="/" tag="img" src="public/images/assets/logo.png"></router-link>
				</div>
				<div class="col-md-6">
					<p>Celaya Guanajuato, México</p>
					<p>Hospital Guadalupano</p>
					<p>Tel: <a href="tel:+52461172 8407">(46) 1172 8407 </a></p>
					<p>Correo: <a href="mailto:alejandra@aleromerodermatologa.online">alejandra@aleromerodermatologa.online</a></p>
				</div>
				<div class="col-md-3">
					<div class="row redes">
						<div class="col-md-4">
								<a href="https://www.facebook.com/aleromeroderma?mibextid=ZbWKwL"><i class="fab fa-facebook-f red facebook"></i></a>

						</div>
						<div class="col-md-4">
						<a href="https://www.instagram.com/aleromeroderma?igsh=MWNrdDJ1Y2tzbGl2OA=="><i class="fab fa-instagram red youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="web pt-2 pb-2 text-center">
			<p>Sitio web desarrollado por <a href="https://webcats.mx/">webcats.mx</a></p>
		</div>
	</footer>
</template>

<script type="text/javascript">
	export default {
        mounted() {
            console.log('Footer mounted.');
        }
    }
</script>
