function validatePass(choosen_pass,correct_pass){
	let contador = 0;
	if(choosen_pass != correct_pass){
			for (let i = 0; i < choosen_pass.length; i++) {
				if(choosen_pass[i] == correct_pass[i]){
					contador++;
				}
			}
			console.log('Coinciden ' + contador + " palabras");
	}else{
		console.log("has acertado la palabra");
	}
}
