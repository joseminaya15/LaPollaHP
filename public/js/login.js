function ingresar(){
	var usuario  = $('#usuario').val();
	if(usuario == null){
		$('#usuario').parent().addClass('is-invalid');
		return;
	}
	$.ajax({
		data : {id_partner  : usuario},
		url  : 'Login/ingresar',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'Home';
        	$('#usuario').val("");
        	$('#password').val("");
        }else {
				$('#usuario').parent().addClass('is-invalid');
				$('#password').parent().addClass('is-invalid');
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}
$("#showpass").click(function(){
	$(this).find('i').toggleClass("mdi-remove_red_eye mdi-visibility_off");
    var input = $(this).parent().find('.mdl-textfield__input');
    if (input.attr("type") == "password"){
    	input.attr("type", "text");
    }else{
      input.attr("type", "password");
    }
});
function soloLetras(e){
  key 	     = e.keyCode || e.which;
  tecla 	   = String.fromCharCode(key).toLowerCase();
  letras     = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = "8-37-39-46";
  tecla_especial = false
  for(var i in especiales){
       if(key == especiales[i]){
           tecla_especial = true;
           break;
       }
   }
   if(letras.indexOf(tecla)==-1 && !tecla_especial){
       return false;
   }
 }
 function valida(e){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8){
      return true;
  }
  patron      =/[0-9]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function verificarDatos(e){
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}
function abrirModal(){
  modal('ModalLogin');
}
function registrar() {
  var pais         = $('#pais').val();
  var partner_id   = $('#partnerId').val();
  var user         = $('#userRegis').val();
  var email        = $('#emailRegis').val();
  var pass         = $('#passRegister').val();
  var nombre       = $('#nombresRegis').val();
  var apellido     = $('#apellidosRegis').val();

  if(pais == ''){
    msj('error', 'Ingrese su país');
    return;
  }
  if(partner_id == ''){
    msj('error', 'Ingrese su partner ID');
    return;
  }
  if(user == ''){
    msj('error', 'Ingrese su usuario');
    return;
  }
  if(email == ''){
    msj('error', 'Ingrese su Email');
    return;
  }
  if (!validateEmail(email)){
    msj('error', 'El formato del correo es incorrecto');
    return;
  }
  if(pass == ''){
    msj('error', 'Ingrese su contraseña');
    return;
  }
  if(nombre == null || nombre == undefined || nombre == ''){
    msj('error', 'Ingrese su nombre');
    return;
  }
  if(apellido == ''){
    msj('error', 'Ingrese su apellido');
    return;
  }
  $.ajax({
    data : {partner_id : partner_id,
            usuario    : user,
            email      : email,
            pass       : pass,
            nombre     : nombre,
            apellido   : apellido,
            pais       : pais},
    url  : 'Login/registrar',
    type : 'POST'
  }).done(function(data){
    try{
        data = JSON.parse(data);
        if(data.error == 0){
          $('#pais').val("");
          $('#partnerId').val("");
          $('#userRegis').val("");
          $('#emailRegis').val("");
          $('#passRegister').val("");
          $('#nombresRegis').val("");
          $('#apellidosRegis').val("");
          $('#passRegister').val("");
          $('#pais').val("");
          msj('error', 'Se registró correctamente');
        }else {
          msj('error', 'Su usuario o contraseña son incorrectos');
          return;
        }
      }catch(err){
        msj('error',err.message);
      }
  });
}