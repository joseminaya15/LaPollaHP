function guardarScore(pais, empate, id){
	console.log(pais);
	console.log(empate);
	$('#'+id).css('background', '#D0D0D0');
  $("#"+id+" input").each(function (){ 
    $('#'+this.id).prop( "disabled", true);
  });
	$.ajax({
		data : {pais   : pais,
				    empate : empate},
		url  : 'Home/guardarScore',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	$('.tabla').html('');
        	$('.tabla').append(data.tabla);
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
function cerrarCesion(){
	$.ajax({
		url  : 'Home/cerrarCesion',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'Login';
        }else {
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}