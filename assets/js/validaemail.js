function validarEmail(email, validacao) {
    var ck_email = [A-Za-z0-9\\._-]+@[A-Za-z0-9]+\\..(\\.[A-Za-z]+)*;
    var valid = document.getElementById(validacao);
    result = ck_email.test(email);
    if (!result) {
        valid.innerHTML = "Endereço de e-mail inválido";
    } else {
        valid.innerHTML = "Endereço de e-mail válido";
    }
    return result;

};
