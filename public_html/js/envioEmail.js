/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function enviarEmail(){
    if($("#txtEmail").val()!== ''){
        // Expresion regular para validar el correo
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        // Se utiliza la funcion test() nativa de JavaScript
        if (regex.test($('#txtEmail').val().trim())) {
            $.ajax({
		type: "POST",
		url: "registroUsuario.php",
		data: { "emailUsuario" :  $("#txtEmail").val() },
		success: function(data){
			alert(data);
        	}
            });
        } else {
            alert('Psss, la direccón de correo no es válida, introduce una buena');
        }
    }else{
        alert("Un email seria un detalle de tu parte.");    
    }
    
}

