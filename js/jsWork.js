//metodo implementado 
var intentosGlobal= 4;
console.log("intentos:" , intentosGlobal)
function validatePass(choosen_pass,correct_pass){
	let contador = 0;
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

				console.log("intentos restantes: ", this.intentosGlobal)
		}else{
			//parte de acierto de contraseña, aqui iria el fin del juego
			console.log("has acertado la palabra");
		}
	}else{
		console.log("ya no te quedan intentos amigo");
	}
}
