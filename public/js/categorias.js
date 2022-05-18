    //Arrow Function
	const validar=()=>{
		const cat_detalle=document.querySelector("#cat_detalle");
		if(cat_detalle.value.length==0){
			Swal.fire({
				icon:'info',
				title:'Error',
				text:'El campo detalle es obligatorio'
			});
          return false; 
		}		

	}