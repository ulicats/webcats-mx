<template>
	
	<div class="row">
	
		<!-- Profile Info and Notifications -->
		<div class="col-md-6 col-sm-8 clearfix">
	
			<ul class="user-info pull-left pull-none-xsm">
	
				<!-- Profile Info -->
				<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img :src="profile()" alt="" class="img-circle" width="44" />
						{{this.$parent.user.name}}
					</a>
					<ul class="dropdown-menu">
						<!-- Reverse Caret -->
						<li class="caret"></li>
						<!-- Profile sub-links -->
						<li><router-link to="/profile/"><i class="fa fa-edit"></i> Editar perfil</router-link></li>
					</ul>
				</li>
	
			</ul>
	
		</div>
	
	
		<!-- Raw Links -->
		<div class="col-md-6 col-sm-4 clearfix hidden-xs">
			<ul class="list-inline links-list pull-right">	
				<li><a @click="$root.handleLogout">Cerrar session <i class="entypo-logout right"></i></a></li>
			</ul>
		</div>
		
		<loader v-if="$root.isLoading == true" object="#b20f24" color1="#ffffff" color2="#17408c" size="5" speed="2" bg="#343a40" objectbg="#999793" opacity="80" disableScrolling="false" name="circular"></loader>
	
	</div>
	
</template>

<script type="text/javascript">
	export default {
		data(){
			return {
				
			}
		},

		methods:{
			profile(){
				return ('https://ui-avatars.com/api/?name='+this.$parent.user.name+'&size=256');
			}	
		}
    }
</script>