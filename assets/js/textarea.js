function caracterTextarea(box,num_max,campospan){
 var contagem_carac = box.length;
 if (contagem_carac != 0){
 document.getElementById(campospan).innerHTML = contagem_carac + ".";
 if (contagem_carac == 1){
 document.getElementById(campospan).innerHTML = contagem_carac + ".";
 }
 if (contagem_carac >= num_max){
 document.getElementById(campospan).innerHTML = "Limite de caracteres excedido!";
 }
 }else{
 document.getElementById(campospan).innerHTML = ".";
 }
}