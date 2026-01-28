<template>
	
	<div >
			<ol class="breadcrumb 2">
				<li><router-link to="/home"><i class="entypo-home"></i>Home</router-link></li>
				<li><router-link :to="'/'+$route.meta.path"><i :class="$route.meta.icon"></i> {{$route.meta.name}}</router-link></li>
				<li class="active" v-if="id"><strong>{{row.name}} {{row.lastname}}</strong></li>

				<div class="active" style="position: relative;float: right;"><router-link :to="'/'+$route.meta.path"><i class="fas fa-reply" style="font-size:20px"></i></router-link></div>
				
			</ol>
		
		<div class="row">
            <div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">	
				<div class="panel-body">
					<form role="form" class="form-horizontal" @submit.prevent="newRow($event.target)">

                        <div class="form-group">
							<label class="col-sm-3 control-label">Nombre:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.name" name="row_name" required >
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.lastname" name="row_lastname" required >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Telefono:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.phone" name="row_phone" required >
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Email:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.email" name="row_email" required type="email" autocomplete="off" :disabled="disabledinput">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Password:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.password" name="row_lastname" type="password"  :validate="rule_password" placeholder="Solo si desea cambiarla" autocomplete="off" :disabled="disabledinput">
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-sm-12">
								<button type="button" class="btn btn-danger" @click="deleteRow" v-show="$route.params.id"><i class="fa fa-trash"></i> Eliminar</button>
								<button type="submit" class="btn btn-success pull-right"><i class="far fa-save"></i> Guardar</button> 			
							</div>
						</div>
					</form>			
				</div>			
			</div>		
		</div>
		</div>

	</div>
</template>
<script type="text/javascript">
	export default {
		data(){
			return {
				row:{},
				id: null,
				statusOptions:[],
				disabledinput:true,
			}
		},
		computed:{
			rule_password:function(){
				if(this.row.password==undefined || this.row.password.length==0){
					return '';
				}
				else{
					return 'min:5|required';
				}
			},
		},
		methods:{

			getRow(){
				this.$root.isLoading = true;
				axios.get(tools.url('/api/admin/'+this.$route.meta.path+'/'+this.id)).then((response)=>{
			    	this.row = response.data;
					this.$root.isLoading = false;
			    }).catch((error)=>{
			    	this.$parent.handleErrors(error);
			    });
			},
			newRow(form){
				this.$parent.validateAll(()=>{
					this.$root.isLoading = true;
					var data = tools.params(form, this.row);
					if(this.$route.params.id){
						axios.post(tools.url('/api/admin/'+this.$route.meta.path+'/'+this.id),data).then((response)=>{
					    	this.getRow();
					    	this.$parent.showMessage("Registro modificado correctamente!","success");
							this.$root.isLoading = false;
					    }).catch((error)=>{
							this.$root.isLoading = false;
					    	this.$parent.handleErrors(error);
					    });
					}
					else{
						axios.post(tools.url('/api/admin/'+this.$route.meta.path),data)
						.then((response)=>{
							var row = response.data;
					    	this.$parent.showMessage("Registro agregado correctamente!","success");
							this.$root.isLoading = false;
					    	this.$router.push('/'+this.$route.meta.path);
					    }).catch((error)=>{
							this.$root.isLoading = false;
					    	this.$parent.handleErrors(error);
					    });
					}
				},(e)=>{
					this.$root.isLoading = false;
					console.log(e);
				});				
			},
			deleteRow:function(){
				alertify.confirm("Alerta!","¿Esta seguro de eliminar este registro?",()=>{
					axios.delete(tools.url('/api/admin/'+this.$route.meta.path+'/'+this.id))
					.then((response)=>{
						this.$parent.showMessage(response.data.msg,"success");
						this.$router.push('/'+this.$route.meta.path);
					})
					.catch((error)=>{
						this.$parent.handleErrors(error);
					});
				},
				()=>{
					
				});
			},
		},
		
		mounted(){
			if(this.$route.params.id){
				this.id = this.$route.params.id;
				this.getRow();
			}
			var self = this;
			setTimeout(function(){
				self.disabledinput = false;
			}, 700)
		}
	}
</script>