/* VALIDAR CAMPOS FORMULARIO */

function validarFormulario(){

	var todoCorrecto = true; //Comprueba si todos los campos son correctos para enviar o no el formulario.
	var mensajeerrores = document.getElementById("erroresformulario"); // Mensajes de error
	mensajeerrores.innerHTML = "";

	// Comprobamos si el campo nombre no está en blanco
	var nombre = document.getElementById("camponombre");

	if(nombre.value == null || nombre.value == "") {
		nombre.classList.add("campoerror");
		mensajeerrores.innerHTML += 'Debes introducir tu nombre y apellidos</br>';
		todoCorrecto = false;
	} else {
		nombre.classList.remove("campoerror");
	}


	// Comprobamos si el campo teléfono es correcto (9 dígitos)
	var tel = document.getElementById("campotelefono");

	if(tel.value.length != 9 || tel.value == null) {
		console.log(tel.value.lenght);
		tel.classList.add("campoerror");
		mensajeerrores.innerHTML += 'Debes introducir un teléfono correcto</br>';
		todoCorrecto = false;
	} else {
		tel.classList.remove("campoerror");
	}


	// Comprobamos si el mail cumple la estructura de un email válido (xxx@yyy.zz)
	var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	var email = document.getElementById("campoemail");

	if(!re.test(email.value) || email.value == null){
		email.classList.add("campoerror");
		mensajeerrores.innerHTML += 'Debes introducir un email correcto</br>';
		todoCorrecto = false;
	} else {
		email.classList.remove("campoerror");
	}

	if(todoCorrecto) {
		window.alert("Mensaje enviado correctamente. ¡Gracias por contactarnos!");
	}
	return todoCorrecto;

}




