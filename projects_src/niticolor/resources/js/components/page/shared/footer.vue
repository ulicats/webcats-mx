<template>
	<footer id="footer">

		<a class="appWhatsapp" target="_blank" href="https://wa.me/523332341375">
		<img src="public/images/assets/whatsapp.png" alt="">
	</a>

	<span class="ir-arriba"><li class="fa fa-angle-double-up"></li> </span>

		<div class="container h-100">
			<div class="row h-100 align-items-center pt-4 pb-4 text-center">
				<div class="col-md-3">
					<router-link class="logo" to="/" tag="img" src="public/images/assets/logo.png"></router-link>
				</div>
				<div class="col-md-6">
				<p>Copyright © 2022 Niticolor S.A de C.V.</p>
				</div>
				<div class="col-md-3">
					<div class="row redes">
						<div class="col-md-4">
							<a href="https://www.facebook.com/niticolor.tepic?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
						</div>
						<div class="col-md-4">
							<a href="https://www.instagram.com/niticolor?igsh=MTJsMDY3aXJrN3dwNA=="><i class="fab fa-instagram"></i></a>
						</div>
						<div class="col-md-4">
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
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
