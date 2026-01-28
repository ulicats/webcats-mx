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

                        <div class="form-group">
							<label class="col-sm-3 control-label">Nombre:</label>
							<div class="col-sm-7">
								<input class="form-control" v-model="row.name" name="row_name" required >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Categoria:</label>
							<div class="col-sm-7">
								<v-select v-model="row.categories_id" :options="categoriesOpcs" label="name" index="id"/>
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