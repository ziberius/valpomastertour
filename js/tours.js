var tours = {
    inicializar() {
        $("#fechaTour").datepicker({
            constrainInput: true,
            dateFormat: "dd/mm/yy",
            onClose: function (selectedDate) {
                general.guardarValor("fechaPago", selectedDate);
            }
        });
        $("#pagarForm").validate({
            rules: {
                fechaTour: {
                    required: true,
                    dateITA: true
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

        $("#inputEmail").on("change", function () {
            general.guardarValor("emailPago", $(this).val());
        });

        $("#tour1Webpay").on("click", function () {
            window.location.href = "server/sample/tbk-normal.php";
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
        if (general.getUrlParameter("pago") === "true") {
            var email = general.cargarValor("emailPago");
            var fecha = general.cargarValor("fechaPago");



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
                    if (msg.success){ // Message Sent? Show the 'Thank You' message and hide the form
                        $("#emailReserva").text(email);
                        $("#fechaReserva").text(fecha);
                    } else{
                        $("#pagoText").text("Error al enviar correo.");
                    }
                    $("#modalPagoConfirmado").modal("show");
                }
            });
        }
    }
};

tours.cargar();