$(document).ready(function() {

  $('form').submit(function(e) {
    e.preventDefault();
  
    $.ajax({
      data: $(this).serializeArray(),
			url: 'process.php',
			dataType: 'json',
      type: 'POST',
      beforeSend: function() {
        $('#result').html('Cargando...');
      }
    })

    .done(function() {
      setTimeout(function() {
        $('#result').html('Username Correcto!');
      }, 1000); 
    })

    .fail(function() {
      setTimeout(function() {
        $('#result').html('Username Incorrecto!');
      }, 1000); 
    });

  });
});