$(document).ready(function() {

    $(".messages").hide();
    //queremos que esta variable sea global
    var fileExtension = "";
    var producto = "";
    var precio = "";
    var Descripcion = "";
    //función que observa los cambios del campo file y obtiene información
    
        
   


    $(':file').change(function()
    {
        //obtenemos un array con los datos del archivo
        var file = $("#imagen")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;
        //mensaje con la información del archivo
        showMessage("<span class='info'>Archivo para subir: " + fileName + ", peso total: " + fileSize + " bytes.</span>");
    });

    //al enviar el formulario

    $('#botonazo').click(function() {
        producto = $("#producto").val();
        precio = $("#precio").val();
        Descripcion = $("#Descripcion").val();
alert(producto);
        if (precio !== "" && producto !== "" && Descripcion !== "") {
            if (isImage(fileExtension)) {
                var lista = new Array();
                $("#formInfo").find(':input').each(function() {
                    var elemento = this;
                    lista.push(elemento.value);
                });
                var x = JSON.stringify(lista);
                $.ajax({
                    type: "POST",
                    url: "insertarInfo.php",
                    data: {data: x},
                    cache: false,
                    success: function() {

                    }
                });
                //información del formulario
                var formData = new FormData($(".formulario")[0]);
                var message = "";
                //hacemos la petición ajax 

                $.ajax({
                    url: 'upload.php',
                    type: 'POST',
                    // Form data
                    //datos del formulario
                    data: formData,
                    //necesario para subir archivos via ajax
                    cache: false,
                    contentType: false,
                    processData: false,
                    //mientras enviamos el archivo
                    beforeSend: function() {
                        message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                        showMessage(message)
                    },
                    //una vez finalizado correctamente
                    success: function(data) {
                        message = $("<span class='success'>La imagen ha subido correctamente.</span>");
                        showMessage(message);
                        if (isImage(fileExtension))
                        {
                            $(".showImage").html("<img src='files/" + data + "' />");
                        }
                    },
                    //si ha ocurrido un error
                    error: function() {
                        message = $("<span class='error'>Ha ocurrido un error.</span>");
                        showMessage(message);
                    }
                });
            } else {
                showMessage("<span class='error'>El formato no es correcto</span>");
            }
        } else {
            alert("debes ingresar todos los datos");
        }
    });
})

//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessage(message) {
    $(".messages").html("").show();
    $(".messages").html(message);
}

//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch (extension.toLowerCase())
    {
        case 'jpg':
        case 'gif':
        case 'png':
        case 'jpeg':
            return true;
            break;
        default:
            return false;
            break;
    }
}