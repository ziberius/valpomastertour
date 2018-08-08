var contacto = {
    inicializar: function i(){
        $("#ajax-contact-form").validate({
            rules:{
                inputTelefono:{
                    number:true
                }
            },
            submitHandler: function f(form) {
		var str = $("#ajax-contact-form").serialize(); 
		$.ajax( { type: "POST", url: "../server/contact.php", data: str, success: function(msg){ 
				if(msg === 'OK') // Message Sent? Show the 'Thank You' message and hide the form
					{ result = '<div class="notification_ok">El mensaje ha sido enviado exitosamente.<br> <a href="#" onclick="contacto.resetear();return false;">Enviar otro mensaje</a></div>'; $("#fields").hide(); } 							
				else
					{ result = msg; } 
				$("#note").html(result); 
			} 
		}); 
		return false;                 
            }            
        });        
    },
    cargar: function c(){
        $(document).ready(function () {
            contacto.inicializar();
        });        
    },
    resetear: function(){
	$("#note").html('');
        $("#ajax-contact-form")[0].reset();
        $("#ajax-contact-form").validate().resetForm();
	$("#fields").show();        
    }

};

contacto.cargar();