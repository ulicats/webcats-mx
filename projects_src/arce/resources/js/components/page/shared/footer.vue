<template>
	<footer id="footer">


<!--div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Promoción</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <video src="public/images/videos/promocion.mp4" controls="controls" autoplay="autoplay" muted style="width: 100%;"></video>
            </div>
        </div>
    </div>
</div-->


		<a class="appWhatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=523332341375">
				<img src="public/images/assets/whatsapp.png" alt="">
			</a>

		<div class="container p-3">
			<div class="row h-100 align-items-center text-center">
				<div class="col-md-4">
					<router-link class="logo" to="/" tag="img" src="public/images/assets/logo_arce.png"></router-link>
				</div>
				<div class="col-md-4">
					<div class="row redes">
						<div class="col-md-12">
							<p>Siguenos en nuestras redes sociales:</p>
							<div class="row redes">
								<div class="col-md-6">
									<a target="_blank" href="https://www.facebook.com/profile.php?id=61553849490372&mibextid=ZbWKwL">
										<i class="fab fa-facebook-f facebook"></i>
									</a>
								</div>
								<div class="col-md-6">
									<a target="_blank" href="https://www.instagram.com/arce.cabanas.mazamitla?igsh=dzczMjNibHA1MWdy" >
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="col-md-4 links">
					<a href="#/galeria">Galeria</a>
					<a href="#/mapa">Mapa</a>
					<a href="#/faq">Faq</a>
				</div>
			</div>
		</div>
		<div class="web pt-2 pb-2 text-center">
			<p>Sitio web desarrollado por <a href="https://webcats.mx/">webcats.mx</a></p>
		</div>
	</footer>
</template>

<script type="text/javascript">
$(document).ready(function(){
	 $("#myModal").modal('show');
});
</script>
