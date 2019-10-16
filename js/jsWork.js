//metodo implementado 
let intentosGlobal= 4;
let palabraAcertada = 0;
console.log("intentos:" , intentosGlobal);
function comprobar_pal(id){
	console.log(id);
}
function validatePass(choosen_pass,correct_pass){
	let contador = 0;
	//parte del fallo de la palabra
	if(intentosGlobal !=0 && palabraAcertada == 0){
		if(choosen_pass != correct_pass){
				intentosGlobal--;
				for (let i = 0; i < choosen_pass.length; i++) {
					if(choosen_pass[i] == correct_pass[i]){
						contador++;
					}
				}
				console.log(contador , "/" , choosen_pass.length , " letras" );
				console.log("intentos restantes: ", intentosGlobal)
		}else{
			//parte de acierto de contraseña, aqui iria el fin del juego
			console.log("has acertado la palabra");
		}
	}else{
		if(intentosGlobal == 0){
			console.log("ya no te quedan intentos amigo");
		}else if(palabraAcertada == 1){
			console.log("has acertado la palabra");
		}
	}
}
