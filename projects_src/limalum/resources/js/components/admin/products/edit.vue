<template>
	
	<div >
			<ol class="breadcrumb 2">
				<li><router-link to="/home"><i class="entypo-home"></i>Home</router-link></li>
				<li><router-link :to="'/'+$route.meta.path"><i :class="$route.meta.icon"></i> {{$route.meta.name}}</router-link></li>
				<li class="active" v-if="id"><strong>{{row.sku}} - {{row.name}}</strong></li>

				<div class="active" style="position: relative;float: right;"><router-link :to="'/'+$route.meta.path"><i class="fas fa-reply" style="font-size:20px"></i></router-link></div>
				
			</ol>
		
		<div class="row">
            <div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">	
				<div class="panel-body">
					<form role="form" class="form-horizontal" @submit.prevent="newRow($event.target)">

						<div class="form-group">
							<div class="col-sm-3">
								<label class="col-sm-12 control-label">Imagen</label>
							</div>
							<div class="col-sm-9">
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
							<label class="col-sm-3 control-label">Sku:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.sku" name="row_sku"  >
							</div>
						</div>

                        <div class="form-group">
							<label class="col-sm-3 control-label">Nombre:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.name" name="row_name" required >
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Nombre:</label>
							<div class="col-sm-7">
								
								<textarea class="form-control" v-model="row.description" name="row_description" style="height: 200px;"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Precio:</label>
							<div class="col-sm-7">
								<currency-input class="form-control" v-model="row.price" name="row_price" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Stock:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.stock" name="row_stock"  >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Categoria:</label>
							<div class="col-sm-7">
								<v-select v-model="row.categories_id" :options="categoriesOpcs" label="name" index="id" @change="getSubcategoriesOpcs(row.categories_id);"/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Subcategoria:</label>
							<div class="col-sm-7">
								<v-select v-model="row.subcategories_id" :options="subcategoriesOpcs" label="name" index="id"/>
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
				categoriesOpcs:[],
				subcategoriesOpcs:[],
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
			getCategoriesOpcs(){
				axios.get(tools.url("/api/admin/categories")).then((response)=>{
			    	this.categoriesOpcs = response.data;
			    }).catch((error)=>{
			    	this.$parent.handleErrors(error);
			    });
			},

			getSubcategoriesOpcs(id){
				if(id){
					axios.get(tools.url("/api/admin/getSubcategories/"+id)).then((response)=>{
						this.subcategoriesOpcs = response.data.subcategories;
					}).catch((error)=>{
			    		this.$parent.handleErrors(error);
			    	});
				}
			},
		},
		
		mounted(){
			this.getCategoriesOpcs();
			if(this.$route.params.id){
				this.id = this.$route.params.id;
				this.getRow();
			}
		}
	}
</script>