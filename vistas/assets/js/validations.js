var continente = $("#geolocalizador").attr("continente");
var codigo_pais = $("#geolocalizador").attr("codigo_pais");
var nombre_pais = $("#geolocalizador").attr("nombre_pais");

/* ----------------------------------------------------------------------------------
 * Format Input -------------------------------------------------------------- */

$("input").focus(function(){
	$(".validation-remove").remove();
})

/* ----------------------------------------------------------------------------------
 * Validation Form -- Contacto --------------------------------------------------- */

$("[fit='contact-form']").click(function(){

    $(".validation-remove").remove();

    var name_ = $("[name='name']").val();
    // console.log("TCL: name_", name_)
    var emailaddress_ = $("[name='email-address']").val();
    // console.log("TCL: emailaddress_ ", emailaddress_)
    var phone_ = $("[name='phone']").val();
    // console.log("TCL: phone_", phone_)


    // Validate: attr(name) ------------------------------------------------
	if(name_ != ""){

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

        // Test error
		if(!expresion.test(name_)){

			$("[name='name']").parent().parent().after('<div class="alert alert-danger validation-remove"><i class="mdi mdi-alert mr-1"></i>No uses números ni caracteres especiales.</div>')
			return false;

        // Test ok && Name too short
		}else if(expresion.test(name_) && name_.length <= 3){

			$("[name='name']").parent().parent().after('<div class="alert alert-danger validation-remove"><i class="mdi mdi-alert mr-1"></i>Debes escribir más de tres caracteres.</div>')
			return false;

		}

    // Nothing written
    }else if(name_.length <= 3){

        $("[name='name']").parent().parent().after('<div class="alert alert-danger validation-remove"><i class="mdi mdi-alert mr-1"></i>Este campo es obligatorio. Escribe tu nombre.</div>')
            return false;
            
    }
    
    // Validate: attr(email_address) ------------------------------------------------
	if(emailaddress_ != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/;

        // Test error
		if(!expresion.test(emailaddress_)){

			$("[name='email-address']").parent().parent().after('<div class="alert alert-danger validation-remove"><i class="mdi mdi-alert mr-1"></i>Escribe correctamente tu correo electrónico.</div>')
			return false;

        // Test ok && Email too short
		}else if(expresion.test(emailaddress_) && emailaddress_.length <= 10){

			$("[name='email-address']").parent().parent().after('<div class="alert alert-danger validation-remove"><i class="mdi mdi-alert mr-1"></i>El correo electrónico es muy corto. Escribelo bien.</div>')
			return false;

		}

    // Nothing written
	}else if(emailaddress_.length == ""){

        $("[name='email-address']").parent().parent().after('<div class="alert alert-danger validation-remove"><i class="mdi mdi-alert mr-1"></i>Este campo es obligatorio. Escribe tu correo electrónico.</div>')
			return false;
            
    }

    // Validate: attr(phone) ------------------------------------------------
	if(phone_ != ""){

		var expresion = /^[+\\ 0-9]*$/;

        // Test error
		if(!expresion.test(phone_)){

			$("[name='phone']").parent().after('<div class="alert alert-danger validation-remove" style="margin-right: 15px;margin-left: 15px;width: 100%;"><i class="mdi mdi-alert mr-1"></i>No utilices letras ni simbolos a excepción del más (+).</div>')
			return false;

        // Test ok && Phone too short
		}else if(expresion.test(phone_) && phone_.length <= 9){

			$("[name='phone']").parent().after('<div class="alert alert-danger validation-remove" style="margin-right: 15px;margin-left: 15px;width: 100%;"><i class="mdi mdi-alert mr-1"></i>Escribe el número completo con código de área.</div>')
			return false;

		}

    // Nothing written
    }else if(phone_.length <= 9){

        $("[name='phone']").parent().after('<div class="alert alert-danger validation-remove" style="margin-right: 15px;margin-left: 15px;width: 100%;"><i class="mdi mdi-alert mr-1"></i>Este campo es obligatorio. Escribe el número con código de área.</div>')
        return false;

    }

    // If all the fields are full...
    $("[fit='contact-form']").attr({"disabled" : "true"});
    
	    setTimeout(function(){
            
            var indice_0 = $("#urlBase").attr("indice_0");
            // console.log("TCL: indice_0", indice_0)
    
            var name = $("[name='name']").val();
            // console.log("TCL: name", name)
            var email_address = $("[name='email-address']").val();
            // console.log("TCL: email_address", email_address)
            var phone = $("[name='phone']").val();
            // console.log("TCL: phone", phone)
    
            var dataNuevoProspecto = new FormData();
            dataNuevoProspecto.append("indice_0", indice_0);
            dataNuevoProspecto.append("name", name);
            dataNuevoProspecto.append("email_address", email_address);
            dataNuevoProspecto.append("phone", phone);
            dataNuevoProspecto.append("codigo_pais", codigo_pais);
    
            $.ajax({
                url:urlBase+"ajax/ext-connection.ajax.php",
                method: "POST",
                data: dataNuevoProspecto,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta){
                    
                    //console.log("respuesta", respuesta);
    
                    if(respuesta == "ok"){

                        $("#btn-submit-contacto").submit();

                    }
    
                }
    
            })
    
        },500)

})