
 function validacampobranco(){

	if(document.getElementById("inputNome1").value == ""){
	   alert("Por favor preencha o campo Nome");
	   document.getElementById("inputNome1").focus();
	   return false;
	}
	
	 else (document.getElementById("inputCargo1").value == ""){
		     alert("Por favor preencha o campo Cargo");
	         document.getElementById("inputCargo1").focus();
	         return false;
	}
	/*
	 else if(document.getElementById("inputTel1").value == ""){
		     alert("Por favor preencha o campo Telefone");
	         document.getElementById("inputTel1").focus();
	         return false;
	}
	else if(document.getElementById("inputCel1").value == ""{
	  	    alert("Por favor preencha o campo Celular");
	        document.getElementById("inputCel1").focus();
	        return false;
	}
	else if(document.getElementById("inputNome2").value == ""{
	  		alert("Por favor preencha o campo Nome");
			document.getElementById("inputNome2").focus();
			return false;
	}
    else if(document.getElementById("inputCargo2").value == ""{
	       alert("Por favor preencha o campo Cargo");
	  	   document.getElementById("inputCargo2").focus();
		   return false;
	}
/*
 else if(document.getElementById("inputEmail2").value == ""{
	alert("Por favor preencha o campo Email");
document.getElementById("inputEmail2").focus();
return false
}

 else if(document.getElementById("inputTel2").value == ""{
	alert("Por favor preencha o campo Telefone");
document.getElementById("inputCel1").focus();
return false
}

 else if(document.getElementById("inputCel2").value == ""{
	alert("Por favor preencha o campo Telefone");
document.getElementById("inputCel2").focus();
return false
  }
*/

};
  
