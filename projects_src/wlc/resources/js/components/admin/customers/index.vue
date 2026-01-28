<template>
	<div>
		<ol class="breadcrumb 2">
			<li><router-link to="/home"><i class="entypo-home"></i>Home</router-link></li>
			<li class="active"><strong><i :class="$route.meta.icon"></i> {{$route.meta.name}}</strong></li>
		</ol>
		<h2 class="margin-bottom">{{$route.meta.name}}</h2>

		<div class="row">
			<div class="col-md-12">
				<div id="toolbar">
			        <router-link :to="'/'+$route.meta.path+'/edit'">
			        	<button class="btn btn-success btn-sm">
				            <i class="fa fa-plus"></i> Nuevo
				        </button>
			        </router-link>
			        <button class="btn btn-danger btn-sm" @click="deleteRows()">
			            <i class="fa fa-trash"></i> Eliminar
			        </button>
			    </div>
				<table id="table" ></table>
			</div>
		</div>
	</div>
</template>
<script type="text/javascript">
	export default {
		data(){
			return {
				rows:[],
			}
		},
		methods:{
			mounthTable(){
				jQuery('#table').bootstrapTable({
					columns: [
					{
							field:"check",
							checkbox:true,
							align: 'center',
						},
						
						
						{
					        field: 'name',
					        title: 'Nombre',
					        sortable:true,
							switchable:true,
							
						},
						{
					        field: 'lastname',
					        title: 'Apellidos',
					        sortable:true,
							switchable:true,
							
						},
						{
					        field: 'phone',
					        title: 'Telefono',
					        sortable:true,
							switchable:true,
							
					    },  
						{
					        field: 'email',
					        title: 'Email',
					        sortable:true,
							switchable:true,
							
						},
						
						
                      
					],
					showRefresh:true,
					locale:"es-US",
				});
				jQuery('#table').on('refresh.bs.table',()=>{
					this.getRows();
				});
				jQuery('#table').on('click-row.bs.table',(row,data)=>{
					this.$router.push('/'+this.$route.meta.path+'/edit/'+data.id);
				});
				this.getRows();
			},

			getRows(){
				this.$root.isLoading = true;
				axios.get(tools.url('/api/admin/'+this.$route.meta.path)).then((response)=>{
					this.rows = response.data;
			    	jQuery('#table').bootstrapTable('removeAll');
			    	jQuery('#table').bootstrapTable('append',this.rows);
					this.$root.isLoading = false;
			    }).catch((error)=>{
			        this.$parent.handleErrors(error);
					this.$root.isLoading = false;
			    });
			},

			deleteRows:function(){
				var rows=jQuery('#table').bootstrapTable('getSelections');
				if(rows.length==0){
					return false;
				}
				alertify.confirm("Alerta!","¿Esta seguro de eliminar "+rows.length+" registros?",()=>{
					var params={};
					params.ids=jQuery.map(rows,(row)=>{
						return row.id;
					});
					
					axios.delete(tools.url('/api/admin/'+this.$route.meta.path),{data:params}).then((response)=>{
						this.$parent.showMessage(response.data.msg,"success");
						this.getRows();

					}).catch((error)=>{
						this.$parent.handleErrors(error);
					});

				},
				()=>{
					
				});
			}
		},
        mounted() {
            this.mounthTable();
        }
    }
</script>