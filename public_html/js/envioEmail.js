/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function enviarEmail(){
    if($("#txtEmail").val()!= ''){
            $.ajax({
		type: "POST",
		url: "registroUsuario.php",
		data: { "emailUsuario" :  $("#txtEmail").val() },
		success: function(data){
			alert(data);
        	}
	});
 
    }else{
        alert("Un email seria un detalle de tu parte.");    
    }
    
}

