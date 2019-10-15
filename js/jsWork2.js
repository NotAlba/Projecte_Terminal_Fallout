//metodo implementado
var intentosGlobal= 4;
console.log("intentos:" , intentosGlobal)
function comprobar_palabra(id){
	console.log(id);
	console.log(document.getElementById(id).innerHTML)
}
function validatePass(choosen_pass,correct_pass){
	let contador = 0;
	let vida = "<span>[]</span>&nbsp";
	//parte del fallo de la palabra
	if(this.intentosGlobal !=0){
		if(choosen_pass != correct_pass){
				this.intentosGlobal--;
				for (let i = 0; i < choosen_pass.length; i++) {
					if(choosen_pass[i] == correct_pass[i]){
						contador++;
					}
				}

				console.log(contador , "/" , choosen_pass.length , " letras" );

				document.getElementById("intentos").innerHTML = this.intentosGlobal + " ATTEMPT(S) LEFT: " + vida.repeat(this.intentosGlobal);
				console.log("intentos restantes: ", this.intentosGlobal)
		}else{
			//parte de acierto de contraseña, aqui iria el fin del juego
			document.getElementById("intentos").innerHTML = "HAS ACERTADO LA PALABRA!! ";
			console.log("has acertado la palabra");
		}
	}else{
		document.getElementById("intentos").innerHTML = "YA NO TE QUEDAN INTENTOS AMIGO";
		console.log("ya no te quedan intentos amigo");
	}
}
