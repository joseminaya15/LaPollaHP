function guardarScore(pais, empate, id){
	console.log(pais);
	console.log(empate);
	console.log($('#'+id).parents().parents().html());
	$($('#'+id).parents().parents().find('.js-partidos')).css('background', '#D0D0D0')
	/*$.ajax({
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
	});*/
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