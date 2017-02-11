function validarcampobranco() {
var nome = form.nome1.value;
var cargo = form.cargo_1.value;
var telefone = form.telefone_1.value;
var celular= form.celular_1.value;

if (nome == "") {
alert('Preencha o campo nome');
form.nome.focus();
return false;
}

if (cargo == "") {
alert('Preencha o campo cargo');
form.cargo.focus();
return false;
}

if (telefone == "") {
alert('Preencha o campo telefone');
form.telefone.focus();
return false;
}

if (celular == "") {
alert('Preencha o campo celular');
form.celular.focus();
return false;
}

	}
