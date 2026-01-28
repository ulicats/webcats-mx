<template>
	<footer id="footer">

<!-- VENTANA MODAL-->

	<!--div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
					<div class="modal-header">
						 <h5 class="text-center">!Promoción Mes de Mayo!</h5>
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
        	</div>
					<div class="modal-body">
						<img src="public/images/promocion.jpg" alt="">
					</div>
    		</div>
		</div>
	</div-->

	<!-- -->

		<a class="appWhatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=3332341375">
				<img src="public/images/assets/whatsapp.png" alt="">
			</a>
		<div class="container h-100">
			<div class="row h-100 align-items-center text-center pb-2 pt-2">
				<div class="col-md-3">
					<router-link class="logo" to="/" tag="img" src="public/images/karen.jpeg"></router-link>
				</div>
				<div class="col-md-6">
					<h5>calle: av. Hidalgo #77</h5>
					<h5>tel: (324) 243 77 77</h5>
					<h5>contacto@gmail.com</h5>
				</div>
				<div class="col-md-3">
					<div class="row redes">
						<div class="col-md-4 pb-2">
							<div class="bg-redes">
								<a target="_blank" href="https://webcats.mx/#/"><i class="fab fa-facebook-f facebook"></i></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="bg-redes">
								<a target="_blank" href="https://webcats.mx/#/"><i class="fab fa-instagram ins"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</template>

<script type="text/javascript">

$(document).ready(function(){
			 $("#myModal").modal('show');
	 });

</script>
