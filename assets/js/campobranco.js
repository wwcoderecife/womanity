var FieldFocus = "";
var FieldName;

function validateEmpty(fld) {
 var error = "";
  
    if (fld.value.length === 0) {
        fld.style.background = '#D8BFD8';         
        error = "Favor Preencher o campo "+fld.name +"\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateFormOnSubmit(fldname) {
var reason = "";

  reason += validateEmpty(fldname);
      
  if (reason != "") {
    //alert("Campos ogrigatório não preenchido:\n" + reason);
    
    if(FieldFocus == ""){
      FieldName = fldname; 	
      FieldFocus += "X";
    };
          
    return false;
  }

  return true;
}

 function validacampobranco(){

 	validateFormOnSubmit(document.getElementById("inputNome1"));
 	validateFormOnSubmit(document.getElementById("inputCargo1"));
 	validateFormOnSubmit(document.getElementById("inputTel1"));
 	validateFormOnSubmit(document.getElementById("inputCel1"));
 	validateFormOnSubmit(document.getElementById("inputNome2"));
 	validateFormOnSubmit(document.getElementById("inputCargo2"));
 	validateFormOnSubmit(document.getElementById("inputEmail2"));
 	validateFormOnSubmit(document.getElementById("inputTel2"));
 	validateFormOnSubmit(document.getElementById("inputCel2"));

    if(FieldFocus != ""){
      FieldName.focus();
    }

 };		

<!--
 //function validacampobranco2(){

 	//validateFormOnSubmit(document.getElementById("inputcnpj"));
 	//validateFormOnSubmit(document.getElementById("inputNomeOng"));
 	//validateFormOnSubmit(document.getElementById("inputelOng"));
 	//validateFormOnSubmit(document.getElementById("inputEmailOng"));
 	//validateFormOnSubmit(document.getElementById("organizacao-tipo"));
 	//validateFormOnSubmit(document.getElementById("year_organizacao"));
 	//validateFormOnSubmit(document.getElementById("pessoas_envolvidas"));
 	//validateFormOnSubmit(document.getElementById("pessoas_beneficiadas"));
 	//validateFormOnSubmit(document.getElementById("sobre"));
 	//validateFormOnSubmit(document.getElementById("publico_alvo"));
 	//validateFormOnSubmit(document.getElementById("sobre_iniciativa_ong1"));
 	//validateFormOnSubmit(document.getElementById("estado_iniciativa"));	
 	//validateFormOnSubmit(document.getElementById("avaliacao"));	
 	//validateFormOnSubmit(document.getElementById("inputAvaliacaoOng"));	
 	//validateFormOnSubmit(document.getElementById("organizacao-comunicacao"));
 	//validateFormOnSubmit(document.getElementById("inputComunicacaoOng"));
 	//validateFormOnSubmit(document.getElementById("premiacao"));
 	//validateFormOnSubmit(document.getElementById("inputPremiacaoOng"));	

 	-->

/*
	if(document.getElementById("inputNome1").value === ""){
	   alert("Por favor preencha o campo Nome");
	   document.getElementById("inputNome1").focus();
	   return false;
	}
	

	 else (document.getElementById("inputCargo1").value === ""){
		     alert("Por favor preencha o campo Cargo");
	         document.getElementById("inputCargo1").focus();
	         return false;
	}


	
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


  
