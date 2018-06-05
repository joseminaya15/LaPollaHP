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
var modal     = $('#ModalConfirmar');
var bgcolor   = null;
function openModalConfirmar(id){
  var idCheck = $('#'+id);
  var pais    = idCheck.siblings('.mdl-radio__label').text();
  modal.find('.mdl-card__supporting-text').find('h2').text(pais);
  modal.modal('show');
  bgcolor = id;
}
function confirmarPartido(){
  var idPartido = $('#'+bgcolor)
  var partido   = idPartido.parents('.js-partidos');
  partido.addClass('js-bgcolor');
  modal.modal('hide');
}