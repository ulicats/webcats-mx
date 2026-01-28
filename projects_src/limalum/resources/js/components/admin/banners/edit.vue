<template>
	
	<div >
			<ol class="breadcrumb 2">
				<li><router-link to="/home"><i class="entypo-home"></i>Home</router-link></li>
				<li><router-link :to="'/'+$route.meta.path"><i :class="$route.meta.icon"></i> {{$route.meta.name}}</router-link></li>
				<li class="active" v-if="id"><strong>{{row.name}}</strong></li>

				<div class="active" style="position: relative;float: right;"><router-link :to="'/'+$route.meta.path"><i class="fas fa-reply" style="font-size:20px"></i></router-link></div>
				
			</ol>
		
		<div class="row">
            <div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">	
				<div class="panel-body">
					<form role="form" class="form-horizontal" @submit.prevent="newRow($event.target)">

                        <input-form name="name" text="Nombre" :data.sync="row.name" ></input-form>
						

						<div class="form-group">
							<label class="col-sm-3 control-label">Dispositivo:</label>
							<div class="col-sm-7">
					              <div class="control-label" style="float:left; padding-left: 20%">
					                <input type="radio" id="pc" name="Computadora" :value="true" v-model="row.device">
					                <label for="pc">Computadora</label>
					              </div>
					              <div class="control-label" style="float:right;padding-right: 20%">
					                <input type="radio" id="mobile" name="Celular" :value="false" v-model="row.device">
					                <label for="mobile">Celular</label>
					              </div>
							</div>
						</div>

						<input-form name="posicion" text="Posición" type="number" :data.sync="row.position" validate="required" v-if="row.section == 0"></input-form>
						
						<input-form name="url" text="Url" :data.sync="row.url"></input-form>

						<div class="form-group">
							<div class="col-sm-3">
								<label class="col-sm-12 control-label">Imagen</label>
							</div>
							<div class="col-sm-9">
								<label class="col-sm-12 control-label" style="text-align: left; padding-bottom: 10px" v-if="row.device == true">Dimensiones recomendadas (1920 x 562): Celular(375 x 300):</label>
								<label class="col-sm-12 control-label" style="text-align: left; padding-bottom: 10px" v-if="row.device == false">Dimensiones recomendadas (496 x 639)</label>
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
										<img :src="row.imageUrl" alt="..." v-if="id!=''">
										<img src="//placehold.it/200x150?text=Imagen" alt="..." v-else>
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 300px"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Seleccionar imagen</span>
											<span class="fileinput-exists">Cambiar</span>
											<input type="file" accept="image/*" name="image">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Quitar</a>
									</div>
								</div>

							</div>
						</div>

						<div class="form-group">
							<checkbox-form name="active" text="Activo" :data.sync="row.status"></checkbox-form>
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
			}
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
		}
	}
</script>