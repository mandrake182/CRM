$(document).ready(function(){
 	function inputFormulario(){
 		var elemt = 0;
 		$('.art').each(function ()
	    {
	        elemt++;
	    });

	    return elemt;	
 	}
 	

 	$("#fr-req").submit(function(e){
 		
 		
 		var bad = 0;

	    $('.art').each(function ()
	    {
	        if ($.trim(this.value) == ""){bad++;}
	    });

	    ele = inputFormulario();

	    if(ele === bad){
	    	e.preventDefault();
	    	alert('Ingrese la información de al menos 1 fila');
	    }else{
	    	return true;
	    }

	    
 	})
 	/*
 	jQuery.validator.addClassRules("art", {				  
	  minlength: 3
	});

	$("#fr-req").validate();
	
	$.validator.messages.required 	= "Campo obligatorio *";
	$.validator.messages.minlength  = "2 caracteres mínimo";
	*/
 	$("#add").click(function(){
 		var idlastsr = $('#tabla_req tr:last').attr('id');
 		var idrow 	 = idlastsr.split('tr-');
 		//alert(idrow[1]);
 		if(isNaN(parseInt(idrow[1]))===false){
 			var nuevoId = parseInt(idrow[1])+1;
 			$("#limit").val(nuevoId);			 			
 			$("#tabla_req").append('<tr id="tr-'+nuevoId+'" class="tr-number"><td>'+nuevoId+'</td><td><input type="text" name="articulo-'+nuevoId+'" class="art" placeholder="Artículo*"></td><td><input type="text" name="medida-'+nuevoId+'" class="art" placeholder="Medida*"></td><td><input type="text" name="cantidad-'+nuevoId+'" class="art" placeholder="Cantidad*""></td><td><input type="text" name="proyecto-'+nuevoId+'" class="art" placeholder="Proyecto*"></td><td><textarea name="comentarios-'+nuevoId+'" placeholder="Comentarios"></textarea></td></tr>');
 		}else{
 			alert('No se puede agregar la fila, refresque su navegador');
 		}
 	});
 });