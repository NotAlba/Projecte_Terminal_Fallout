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

				document.getElementById("mensaje6").innerHTML = document.getElementById("mensaje5").innerHTML;
				document.getElementById("mensaje5").innerHTML = document.getElementById("mensaje4").innerHTML;
				document.getElementById("mensaje4").innerHTML = document.getElementById("mensaje3").innerHTML;
				document.getElementById("mensaje3").innerHTML = document.getElementById("mensaje2").innerHTML;
				document.getElementById("mensaje2").innerHTML = document.getElementById("mensaje1").innerHTML;
				document.getElementById("mensaje1").innerHTML = "Semejanza " + contador;
				id.innerHTML = adicionPuntos;
				id.style.pointerEvents = "none"
				document.getElementById("intentos").innerHTML = intentosGlobal + " ATTEMPT(S) LEFT: " + vida.repeat(intentosGlobal);
			}else{
				document.getElementsByClassName("caracteres")[0].innerText = "has bloqueado el terminal!";
				document.getElementById("intentos").innerHTML = "TERMINAL BLOQUEADA";
				document.getElementsByClassName("codigo")[0].innerText = "";
				document.getElementsByClassName("codigo")[1].innerText = "";
				document.getElementById("mensaje6").innerHTML = "";
				document.getElementById("mensaje5").innerHTML = "";
				document.getElementById("mensaje4").innerHTML = "";
				document.getElementById("mensaje3").innerHTML = "";
				document.getElementById("mensaje2").innerHTML = "";
				document.getElementById("mensaje1").innerHTML = "";
			}
		}


		else{
			document.getElementsByClassName("caracteres")[0].innerText = "has desbloqueado el terminal!";
			document.getElementById("intentos").innerHTML = "TERMINAL DESBLOQUEADA";
			document.getElementsByClassName("codigo")[0].innerText = "";
			document.getElementsByClassName("codigo")[1].innerText = "";
			document.getElementById("mensaje6").innerHTML = "";
			document.getElementById("mensaje5").innerHTML = "";
			document.getElementById("mensaje4").innerHTML = "";
			document.getElementById("mensaje3").innerHTML = "";
			document.getElementById("mensaje2").innerHTML = "";
			document.getElementById("mensaje1").innerHTML = "";
		}
	}
