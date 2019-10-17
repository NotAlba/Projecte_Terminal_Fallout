//metodo implementado
let intentosGlobal= 4;
console.log("intentos:" , intentosGlobal)
function comprobar_pal(id,palabraCorrecta){
	adicionPuntos = ".....";
	let vida = "<span>[]</span>&nbsp";
	let contador = 0;
	let palabraSeleccionada = palabra = document.getElementById(id).innerHTML;
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
				document.getElementById(id).innerHTML = adicionPuntos;
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

	
function validatePass(choosen_pass,correct_pass){

	//parte del fallo de la palabra
	if(this.intentosGlobal !=0){
		if(choosen_pass != correct_pass){
				this.intentosGlobal--;
				if(this.intentosGlobal!=0){
					for (let i = 0; i < choosen_pass.length; i++) {
						if(choosen_pass[i] == correct_pass[i]){
							contador++;
						}
					}

					document.getElementById("intentos").innerHTML = this.intentosGlobal + " ATTEMPT(S) LEFT: " + vida.repeat(this.intentosGlobal);
					console.log("intentos restantes: ", this.intentosGlobal);
				}else{
					document.getElementById("intentos").innerHTML = "YA NO TE QUEDAN INTENTOS AMIGO";
					console.log("ya no te quedan intentos amigo");
				}
		}else{
			//parte de acierto de contraseña, aqui iria el fin del juego
			document.getElementById("intentos").innerHTML = "HAS ACERTADO LA PALABRA!! ";
			console.log("has acertado la palabra");
		}
	}
}
