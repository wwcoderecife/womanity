function validasenha(campotext,max_senha,label ){

var senha = campotext.length;
if(senha.value.length<6){
	document.getElementById(label).innerHTML = senha + "Preencha SENHA corretamente, mínimo de 6 digítos!";

}

};	


