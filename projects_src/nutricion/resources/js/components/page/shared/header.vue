<template>
    <header id="header">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-10 col-sm-8 col-6 logo">
                    <router-link to="/" tag="img" src="public/images/karen.jpeg"></router-link>
                </div>
                <div class="col-md-1 col-sm-2 col-3 redes">
                  <div class="bg-redes">
                    <a target="_blank" href="https://webcats.mx/#/"><i class="fab fa-facebook-f facebook"></i></a>
                  </div>
                </div>
                <div class="col-md-1 col-sm-2 col-3 redes">
                  <div class="bg-redes">
                    <a target="_blank" href="https://webcats.mx/#/"><i class="fab fa-instagram ins"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script type="text/javascript">
	export default {
        mounted() {
            console.log('Header mounted.');
        }
    }
</script>
