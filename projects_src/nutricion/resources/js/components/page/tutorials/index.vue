<template>
	<div class="pagina">
			

	</div>
</template>
<script type="text/javascript">
	export default {
		methods:{
			goTo:function(to) {
				let code = document.getElementById(to);
				code.scrollIntoView();
			}
		}
	}
</script>
<style type="text/css">
	pre{
		width: 70%;
	}
</style>
