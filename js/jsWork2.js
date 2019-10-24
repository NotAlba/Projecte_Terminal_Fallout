//metodo implementado
let intentosGlobal= 4;
let intentosConsumidos = 0;
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

			}
			else if (posicionBr == 2) {

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

			intentosConsumidos++;
			document.getElementById("intentos").innerHTML = intentosGlobal + " ATTEMPT(S) LEFT: " + vida.repeat(intentosGlobal);
		}else{
			document.getElementById("vaultboyloss").className += " finjuegoimagen";
			document.getElementById("tiempoCrono").innerHTML = "";
			
			__juegoPerdido();

		}
	}

	else{
		__juegoGanado();
		document.getElementById("vaultboywin").className += " finjuegoimagen";
		__cronoFin();

		setTimeout("__mensajePromptFinJuego()",50);

	}
}


function ayuda(pal,palabraCorrecta,simbolos) {
	let numRandomAyuda = Math.floor(Math.random() * 2);
	let palRandomAyuda = Math.floor(Math.random() * 5);
	let palFalsa = pal[palRandomAyuda].innerHTML;
	let correcto = palabraCorrecta.innerHTML;
	let simbolosAyudaSelecionado = simbolos.innerHTML;
	let puntosCarac = "." * simbolosAyudaSelecionado.length;
	simbolosAyudaSelecionado = puntosCarac;

	if (correcto!=palFalsa) {
		if (numeroRandom%2==0) {
			posicionBr = palFalsa.indexOf("<br>");
			palFalsa = palabra.replace("<br>","");

			if(posicionBr == 1){
				puntosCarac = ".<br>...."
			}
			else if (posicionBr == 2) {
				puntosCarac = "..<br>..."
			}
			else if (posicionBr == 3) {
				puntosCarac = "...<br>.."
			}
			else if (posicionBr == 4) {
				puntosCarac = "....<br>."
			}

		}
		else {
			intentosGlobal = 4;
		}
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
	document.getElementsByClassName("caracteres")[0].innerText = "";
	document.getElementById("intentos").innerHTML = "TERMINAL BLOQUEADA";
	
	



	for (let i = 0; i<mensajesFallo.length;i++) {

		mensajesFallo[i].innerHTML = "";
	}

}

function __juegoGanado(){
	let mensajesFallo = document.getElementsByClassName("mensajeFallo");
	document.getElementsByClassName("caracteres")[0].innerText = "";
	document.getElementById("intentos").innerHTML = "TERMINAL DESBLOQUEADA";
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

		seg = "00";

		min++;
		document.getElementById("minutos").innerHTML = min;
	}
	document.getElementById("segundos").innerHTML = seg;
	seg++;
}

function cronoInicio() {
	cronometro = setInterval(crono,1000);
};

function __cronoFin() {
	clearInterval(cronometro);
};
// Fin cronometro



function __mensajePromptFinJuego() {
	let nombreJugador = prompt("Escribe tu nombre");
	if (seg < 10) {
		seg = "0" + (seg-1);
	}

	document.getElementById("intentos").innerHTML = nombreJugador +" - Tiempo: "+ min+":"+seg +" - Vidas: "+ intentosGlobal;
	document.getElementById("tiempoCrono").innerHTML = "";
	if(min<10){
		min = "0" + (min);
	}
	document.getElementById("intentos").innerHTML = nombreJugador +" - "+ min+":"+seg;

	document.getElementById("player").value = nombreJugador
	document.getElementById("time").value = min+":"+seg;
	document.getElementById("try").value = intentosConsumidos;
	document.getElementById("dataRanking").submit();
}

//
