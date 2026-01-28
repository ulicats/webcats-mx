<template>
    <header id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-2 align-self-center logo">
                    <router-link to="/" tag="img" src="public/images/logo.jpeg"></router-link>
                </div>
                <div class="col-md-6 offset-md-2 align-self-center menu">
                    <nav class="navbar navbar-expand">
                        <ul class="navbar-nav">
                            <router-link class="nav-link" to="/" tag="li" v-bind:class="{ active : $router.path=='/' }">Inicio</router-link>
                            <router-link class="nav-link" to="/instalation" tag="li">Calistenia</router-link>
                            <router-link class="nav-link" to="/backend" tag="li">Torneos</router-link>
                            <router-link class="nav-link" to="/frontend" tag="li">Galeria</router-link>
                            <router-link class="nav-link" to="/frontend" tag="li">Productos</router-link>
                            <!--router-link class="nav-link gray" to="/tutorials" tag="li">Videos</router-link-->
                        </ul>
                    </nav>
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
