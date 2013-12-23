
    var x; 
 x=$(document); 
 x.ready(inicializarEventos); 
 function login(){
                $('#error').hide();
                $('#verificacion').click(function() {
                    var usua = $("#txtusuario").val();
                    var pass = $('#txtpass').val();
                    if (usua != "" && pass != "") {
                        $(this).load("verificarLogin.php?txtusuario=" + usua + "&txtpass=" + pass);
                    } else {
                        alertify.log("Usuario y contraseña no pueden estar vacios.");
                    }
                });
            
}

