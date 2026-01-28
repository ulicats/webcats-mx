<template>
  <header>
        <nav id="main-menu" class="navbar navbar-expand-lg navbar-light bg-casillas">
           <div class="container-fluid">
              <a class="navbar-brand floated-logo" href="/">
                <img src="public/images/assets/logo.jpg" alt="Logotipo" class="img-fluid">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav">
                      <li class="nav-item">
                         <a class="nav-link text-white" href="#sec1">Inicio</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link text-white" href="#sec2">Servicios</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link text-white" href="#sec3">Nosotros</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link text-white" href="#sec5">Contacto</a>
                      </li>

                   </ul>
                </div>
              </div>
        </nav>
      </header>
</template>

<script type="text/javascript">
	export default {
        mounted() {
            console.log('Header mounted.');
        }
    }
</script>
