//metodo implementado
let intentosGlobal= 4;
console.log("intentos:" , intentosGlobal)
function comprobar_pal(id,palabraCorrecta){
	id.classList.add("disabled");
	adicionPuntos = ".....";
	let vida = "<span>[]</span>&nbsp";
	let contador = 0;
	let palabraSeleccionada = palabra = id.innerHTML;
	let correct = palabraCorrecta.innerHTML;
	correct = correct.replace("<br>","");
	posicionBr = palabraSeleccionada.indexOf("<br>");
	palabraSeleccionada = palabra.replace("<br>","");

	if(palabraSeleccionada!= correct){
		intentosGlobal--;
		if(intentosGlobal!=0){
			for (let i = 0; i < palabraSeleccionada.length; i++) {
				if(palabraSeleccionada[i] == correct[i]){
					contador++;
				}
			}
			if(posicionBr == 1){
				adicionPuntos = ".<br>...."
			}else if (posicionBr == 2) {
				adicionPuntos = "..<br>..."
			}
			else if (posicionBr == 3) {
				adicionPuntos = "...<br>.."
			}
			else if (posicionBr == 4) {
				adicionPuntos = "....<br>."
			}

			__rellenarMensajes(contador);
			id.innerHTML = adicionPuntos;
			id.style.pointerEvents = "none"
			document.getElementById("intentos").innerHTML = intentosGlobal + " ATTEMPT(S) LEFT: " + vida.repeat(intentosGlobal);
		}else{
			__juegoPerdido();
			
		}	
	}


	else{
		__juegoGanado();
		document.getElementById("vaultboywin").className += " finjuegoimagen";

	}
}

function __rellenarMensajes(contador){
	let mensajesFallo = document.getElementsByClassName("mensajeFallo");
	for (let i = mensajesFallo.length-1; i>=0;i--) {
		if(i==0){
			mensajesFallo[i].innerHTML = "Semejanza " + contador;
		}else{
			mensajesFallo[i].innerHTML = mensajesFallo[i-1].innerHTML
		}
	}
}

function __juegoPerdido(){
	document.getElementsByClassName("caracteres")[0].innerText = "has bloqueado el terminal!";
	//document.getElementById("intentos").innerHTML = "TERMINAL BLOQUEADA";
	document.getElementsByClassName("codigo")[0].innerText = "";
	document.getElementsByClassName("codigo")[1].innerText = "";
	document.getElementById("vaultboyloss").className += " finjuegoimagen";

	for (let i = 0; i<mensajesFallo.length;i++) {

		mensajesFallo[i].innerHTML = "";
	}



}

function __juegoGanado(){
	let mensajesFallo = document.getElementsByClassName("mensajeFallo");
	document.getElementsByClassName("caracteres")[0].innerText = "has desbloqueado el terminal!";
	//document.getElementById("intentos").innerHTML = "TERMINAL DESBLOQUEADA";
	document.getElementsByClassName("codigo")[0].innerText = "";
	document.getElementsByClassName("codigo")[1].innerText = "";

	for (let i = 0; i<mensajesFallo.length;i++) {

		mensajesFallo[i].innerHTML = "";
	}
}


// Parte del cronometro

let cronometro;
let seg = 00;
let min = 00;

function crono() {
	if (seg < 10) {
		seg = "0" + seg;
	}
	if (seg == 60) {
		seg = 00;
		min++;
		document.getElementById("minutos").innerHTML = min;
	}
	document.getElementById("segundos").innerHTML = seg;
	seg++;
}

function cronoInicio() {
	cronometro = setInterval(crono,1000);
};

function cronoFin() {
	if (intentosGlobal==0) {
		document.getElementById("intentos").innerHTML = "AAAA";
		clearInterval(cronometro);
	}
};

// Fin cronometro
