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
      FieldFocus = "X";
    };
          
    return false;
  }

  return true;
}



function validacampobrancoiniciativa1(){

  validateFormOnSubmit(document.getElementById("organizacao-cnpj"));
  validateFormOnSubmit(document.getElementById("inputnomeong"));
  validateFormOnSubmit(document.getElementById("inputcnpj"));
  validateFormOnSubmit(document.getElementById("inputTel3"));
  validateFormOnSubmit(document.getElementById("inputNomeIni"));
  validateFormOnSubmit(document.getElementById("inputEmailIni"));
  validateFormOnSubmit(document.getElementById("natureza"));
  validateFormOnSubmit(document.getElementById("inputoutros"));
  validateFormOnSubmit(document.getElementById("year_organizacao"));
  validateFormOnSubmit(document.getElementById("pessoas_envolvidas"));
  validateFormOnSubmit(document.getElementById("pessoas_beneficiadas"));
  validateFormOnSubmit(document.getElementById("subtemas"));
  validateFormOnSubmit(document.getElementById("sobre"));
  validateFormOnSubmit(document.getElementById("publico_alvo"));
  validateFormOnSubmit(document.getElementById("estado_iniciativa"));
  validateFormOnSubmit(document.getElementById("avaliacao"));
  validateFormOnSubmit(document.getElementById("inputAvaliacaoOng"));
  validateFormOnSubmit(document.getElementById("iniciativa-comunicacao"));
  validateFormOnSubmit(document.getElementById("inputComunicacaoOng"));
  validateFormOnSubmit(document.getElementById("iniciativa-comunicacao"));
  validateFormOnSubmit(document.getElementById("premiacao"));
  validateFormOnSubmit(document.getElementById("inputPremiacao"));
  
    

 if(FieldFocus == "X"){
      FieldName.focus();
      FieldName.scrollIntoView();
      FieldFocus = "";
    }

 }; 
