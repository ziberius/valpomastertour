var tours = {
    inicializar() {
        $("#fechaTour").datepicker({
            constrainInput: true,
            dateFormat: "dd/mm/yy",
            onClose : function(selectedDate) {
                sessionStorage.setItem("fechaPago",selectedDate);
            }            
        });
        $("#pagarForm").validate({
            rules:{
                fechaTour:{
                    required:true,
                    dateITA:true
                }
            },
                
            submitHandler: function (form) {
                // some other code
                // maybe disabling submit button
                // then:
                $(form).submit();
            }
        });
    },
    botones() {
        $("#cpcReservar").on("click", function () {
            $("#modalReservar").modal("show");
            $("#inputEmail").val("");
            $("#fechaTour").val("");
         });
        
        $("#inputEmail").on("change",function(){
           sessionStorage.setItem("emailPago",$(this).val());
        });
    },
    cargar: function () {
        $(document).ready(function () {
            tours.inicializar();
            tours.botones();
            tours.validarPago();
        });
    },
    validarPago: function(){
        if(general.getUrlParameter("pago") === "true"){
            var email = sessionStorage.getItem("emailPago");
            var fecha = sessionStorage.getItem("fechaPago");
            $("#emailReserva").text(email);
            $("#fechaReserva").text(fecha);
            $("#modalPagoConfirmado").modal("show");
            
            var datos = {
                'correo': email,
                'fecha': fecha
            };            
            
            $.ajax( { 
                type: "POST", 
                url: "../server/contact-form.php", 
                data: JSON.stringify(datos), 
                dataType:"JSON",
                success: function(msg){ 
                    if(msg.success === 'OK') // Message Sent? Show the 'Thank You' message and hide the form
                        alert('correo enviado');
                    else{   
                        alert('error al enviar correo');
                    } 
                } 
            });             
        }
    }
};

tours.cargar();