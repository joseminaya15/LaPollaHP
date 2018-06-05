var cont = 1;
function guardarScore(pais, empate, id){
  var Id = $("#"+id).attr('data-Id');
	$('#'+id).css('background', '#D0D0D0');
  $("#"+id+" input").each(function (){ 
    $('#'+this.id).prop( "disabled", true);
  });
  if(empate == ' '){
    empate = 0;
  }else {
    empate = 1;
  }
	$.ajax({
		data : {pais   : pais,
				    empate : empate,
            cont   : cont,
            Id     : Id},
		url  : 'Home/guardarScore',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	$('.tabla').html('');
        	$('.tabla').append(data.tabla);
          cont++;
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