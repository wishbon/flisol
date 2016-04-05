<script>
$(document).ready(function(){
	$(window).bind('scroll', function() {
		var navHeight = $( window ).height() - 50;
		if ($(window).scrollTop() > navHeight) {
			$('nav').addClass('fixed');
		}
		else {
			$('nav').removeClass('fixed');
		}
	});
});

$(document).ready(function () {
	$(document).on("scroll", onScroll);

	//smoothscroll
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");

		$('a').each(function () {
			$(this).removeClass('active');
		})
		$(this).addClass('active');

		var target = this.hash,
		menu = target;
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top+2
		}, 1000, 'swing', function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});
});

function onScroll(event){
	var scrollPos = $(document).scrollTop();
	$('nav a').each(function () {
		var currLink = $(this);
		var refElement = $(currLink.attr("href"));
		if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
			$('nav ul li a').removeClass("active");
			currLink.addClass("active");
		}
		else{
			currLink.removeClass("active");
		}
	});
}

//////////FORMULARIO ASISTENTE//////////////

function quitarenter() {
	var elemento = document.getElementById("resumenasistente");
		string = elemento.value;
		string = string.replace(/\n/g, " ");
		elemento.value = string;
			return false;
		}

//////////FORMULARIO CHARLA//////////////

function minimocharla() {
	var elemento = document.getElementById("charlaresumen");
	if(elemento.value.length <= 300){
		string = elemento.value;
		string = string.replace(/\n/g, " ");
		elemento.value = string;
			alert('Ingrese un mínimo 300 carácteres');
			return false;
		}
		else {
			string = elemento.value;
			string = string.replace(/\n/g, " ");
			elemento.value = string;
			return false;
		}
}
function limitacharla(elEvento, maximoCaracteres) {
	var elemento = document.getElementById("charlaresumen");
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.keyCode;
	if(codigoCaracter == 37 || codigoCaracter == 39) {
		return true;
	}
	if(codigoCaracter == 8 || codigoCaracter == 46) {
		return true;
	}
	else if(elemento.value.length >= maximoCaracteres ) {
		return false;
	}
	else {
		return true;
	}
}

function actualizaInfocharla(maximoCaracteres) {
	var elemento = document.getElementById("charlaresumen");
	var info = document.getElementById("infocharla");
	if(elemento.value.length >= maximoCaracteres ) {
		info.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
	}
	else {
		info.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
	}
}

//////////FORMULARIO TALLER//////////////
function minimotaller() {
	var elemento = document.getElementById("tallerresumen");
	if(elemento.value.length <= 300){
		string = elemento.value;
		string = string.replace(/\n/g, " ");
		elemento.value = string;
			alert('Ingrese un mínimo 300 carácteres');
			return false;
		}
		else {
			string = elemento.value;
			string = string.replace(/\n/g, " ");
			elemento.value = string;
			return false;
		}
}
function limitataller(elEvento, maximoCaracteres) {
	var elemento = document.getElementById("tallerresumen");
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.keyCode;
	if(codigoCaracter == 37 || codigoCaracter == 39) {
		return true;
	}
	if(codigoCaracter == 8 || codigoCaracter == 46) {
		return true;
	}
	else if(elemento.value.length >= maximoCaracteres ) {
		return false;
	}
	else {
		return true;
	}
}

function actualizaInfotaller(maximoCaracteres) {
	var elemento = document.getElementById("tallerresumen");
	var info = document.getElementById("infotaller");
	if(elemento.value.length >= maximoCaracteres ) {
		info.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
	}
	else {
		info.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
	}
}

//////////FORMULARIO STAND//////////////
function minimostand() {
	var elemento = document.getElementById("standresumen");
	if(elemento.value.length <= 300){
			string = elemento.value;
			string = string.replace(/\n/g, " ");
			elemento.value = string;
			alert('Ingrese un mínimo 300 carácteres');
			return false;
		}
		else {
			string = elemento.value;
			string = string.replace(/\n/g, " ");
			elemento.value = string;
			return false;
		}
}
function limitastand(elEvento, maximoCaracteres) {
	var elemento = document.getElementById("standresumen");
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.keyCode;
	if(codigoCaracter == 37 || codigoCaracter == 39) {
		return true;
	}
	if(codigoCaracter == 8 || codigoCaracter == 46) {
		return true;
	}
	else if(elemento.value.length >= maximoCaracteres ) {
		return false;
	}
	else {
		return true;
	}
}

function actualizaInfostand(maximoCaracteres) {
	var elemento = document.getElementById("standresumen");
	var info = document.getElementById("infostand");
	if(elemento.value.length >= maximoCaracteres ) {
		info.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
	}
	else {
		info.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
	}
}

</script>
