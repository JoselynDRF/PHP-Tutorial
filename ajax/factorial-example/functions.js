$(document).ready(function() {
	
	$("#submit_cal").click(function() {		
		var num = $("#number").val(); // Obtener el número escrito en el formulario
		
		if( num == "") {
			alert("Escribe un número!");
			return;
		}
		
		// Array de parámetros para mandar por POST
		var params = {
			"numFactorial" : num
		};
				
		// Llamar al fichero PHP (factorial.php) con AJAX
		$.ajax({
			data: params,
			url: 'factorial.php',
			dataType: 'html',
			type: 'POST',
			beforeSend: function() {
				$('#loading_spinner').show();
				$("#result").html("Calculando...");
			},
			success: function(response) {
				$('#loading_spinner').hide();
				$("#result").html(response);
				console.log(response);
			}
		});
	});
});
