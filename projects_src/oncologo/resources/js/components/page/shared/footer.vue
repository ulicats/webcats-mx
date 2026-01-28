<template>
	<footer id="footer" class="">
		<a class="appWhatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=3332341375">
				<img src="public/images/assets/whatsapp.png" alt="">
			</a>

			<span class="ir-arriba icon-arrow-up2"></span>

		<div class="container">
			<div class="row align-items-center text-center pb-2 pt-4">
				<div class="col-md-3 pb-4">
					<router-link class="logo" to="/" tag="img" src="public/images/assets/web_logo.png"></router-link>
				</div>
				<div class="col-md-6 pb-2">
					<h5>Derechos Reservados © Dr. Erick Gutiérrez.</h5>
				</div>
				<div class="col-md-3">
					<div class="row redes">
						<div class="col-md-4 pb-2">
							<div class="bg-redes">
								<a target="_blank" href="https://www.facebook.com/egq.erick?mibextid=ZbWKwL"><i class="fab fa-facebook-f facebook"></i></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="bg-redes">
								<a target="_blank" href="https://www.instagram.com/oncologocirujano?igsh=MTdmZ2t6cWVxOHZjYg=="><i class="fab fa-instagram ins"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="web pt-2 pb-2 text-center">
			<p>Landing Page desarrollada por <a href="https://webcats.mx/">webcats.mx</a></p>
		</div>
	</footer>
</template>

<script type="text/javascript">
	export default {

    }

		$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

});
</script>
