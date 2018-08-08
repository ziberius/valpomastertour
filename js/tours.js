var tours = {
    inicializar() {
        $("#inputFechaTour").datepicker({
            constrainInput: true,
            dateFormat: "dd/mm/yy"
        });
        $("#formValidar").validate({
            rules: {
                fechaTour: {
                    required: true,
                    dateITA: true
                }
            },
            submitHandler: function (form) {
                return false;
            }            
        });
    },
    guardarDatosSesion: function(){
        general.guardarValor("fechaPago", $("#inputFechaTour").val());
        general.guardarValor("emailPago", $("#inputEmail").val());
    },
    validarCampos: function(){
        return $("#formValidar").validate().element("#inputEmail") && $("#formValidar").validate().element("#inputFechaTour");
    },
    botones() {
        $("#cpcReservar").on("click", function () {
            general.limpiarValores();
            $("#formValidar").validate().resetForm();
            $("#modalReservar").modal("show");
            $("#inputEmail").val("");
            $("#inputFechaTour").val("");
        });

        $("#inputEmail").on("change", function () {
            general.guardarValor("emailPago", $(this).val());
        });

        $("#tour1Webpay").on("click", function () {
            window.location.href = "server/sample/tbk-normal.php";
        });
        
        $("#btnPagarPaypal").on("click",function(){
            if(tours.validarCampos()){
                tours.guardarDatosSesion();
                $("#pagarFormPaypal").submit();
            };
        });
        
        $("#btnPagarWebpay").on("click",function(){
            if(tours.validarCampos()){
                tours.guardarDatosSesion();
                $("#pagarFormWebpay").submit();
            };            
        });
    },
    cargar: function () {
        $(document).ready(function () {
            tours.inicializar();
            tours.botones();
            tours.validarPago();
        });
    },
    validarPago: function () {
        if (general.getUrlParameter("pago") === "true" && general.cargarValor("emailPago") !== null && general.cargarValor("fechaPago") !== null) {
            var email = general.cargarValor("emailPago");
            var fecha = general.cargarValor("fechaPago");

            var rechazo = general.cargarValor("pagoRechazado");

            if (rechazo !== undefined && rechazo !== null) {
                $("#pagoText").text(rechazo);
                $("#modalPagoConfirmado").modal("show");
                general.limpiarValores();
            } else {

                var datos = {
                    'correo': email,
                    'fecha': fecha
                };

                $.ajax({
                    type: "POST",
                    url: "../server/contact-form.php",
                    data: JSON.stringify(datos),
                    dataType: "JSON",
                    success: function (msg) {
                        if (msg.success) { // Message Sent? Show the 'Thank You' message and hide the form
                            $("#emailReserva").text(email);
                            $("#fechaReserva").text(fecha);
                        } else {
                            $("#pagoText").text("Error al enviar correo.");
                        }
                        $("#modalPagoConfirmado").modal("show");
                        general.limpiarValores();
                    }
                });
            }
        }
    }
};

tours.cargar();