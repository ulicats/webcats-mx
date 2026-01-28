<template>
	<footer id="footer" class="pt-4">

		<a class="appWhatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=523338097402">
					<img src="public/images/assets/whatsapp.png" alt="">
			</a>
		<div class="container h-100">
			<div class="row text-center">

				<div class="col-md-4">
					<router-link class="logo mb-4" to="/" tag="img" src="public/images/logo.png"></router-link>
				</div>

				<div class="col-md-4">
				 <h4 class="font-weight-bold pb-3">Contacto</h4>
				 <p>negocios@wlcapital.com.mx</p>
				 <p>tel: 33 3809 7402</p>
				</div>

				<div class="col-md-4">
					<div class="redes">
							<h4 class="font-weight-bold pb-3 ">Redes</h4>
							<a target="_blank" class="t-150 btn-network" href="https://wlcapital.com.mx/">
								<span><i class="fab fa-facebook-f red facebook"></i></span>
							</a>
							<a target="_blank" class="t-150 btn-network" href="https://wlcapital.com.mx/">
							<span><i class="fab fa-instagram red instagram"></i></span>
							</a>
					</div>
				</div>
			</div>
		</div>
		<div class="web pt-2 pb-2 text-center">
		<p>Sitio web desarrollado por <a href="https://webcats.mx/">webcats.mx</a></p>
	</div>
	</footer>
</template>

<script>
export default {
  data(){
    return{}
  }
}
</script>
