var cont = 1;
function guardarScore(/*pais, empate, id*/){
  //var Id = $("#"+id).attr('data-Id');
  var empate = null;
  if(pais_glob != 'Empate'){
    empate = 0;
  }else {
    empate = 1;
  }
	$.ajax({
		data : {pais   : pais_glob,
				    empate : empate,
            cont   : cont,
            Id     : dataId_glob},
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
var idpartido = null;
var pais_glob = null;
var dataId_glob   = null;
function openModalConfirmar(id){
  var idCheck = $('#'+id);
  var pais    = idCheck.siblings('.mdl-radio__label').text();
  var partido = idCheck.parents('.js-partidos').attr('id');
  var dataId  = idCheck.parents('.js-partidos').attr('data-Id');
  modal.find('.mdl-card__supporting-text').find('h2').text(pais);
  modal.modal('show');
  bgcolor = id;
  idpartido = partido;
  pais_glob = pais;
  dataId_glob = dataId;
  /*console.log(pais);
  console.log(bgcolor);
  console.log(partido);
  console.log(dataId);*/
}
function confirmarPartido(){
  $('#'+idpartido).addClass('js-bgcolor');
  modal.modal('hide');
}
function agregarDatosElim(){
  $.ajax({
    url  : 'Home/agregarDatosElim',
    type : 'POST'
  }).done(function(data){
    try{
        data = JSON.parse(data);
        if(data.error == 0){
          $('#Fase2').append(data.html);
        }else {
          return;
        }
      }catch(err){
        msj('error',err.message);
      }
  });
}