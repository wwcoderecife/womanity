<?php

	require_once "CadastrarAll.class.php";
	
	//contato 1
	$cargo_1 = filter_input(INPUT_POST, "cargo_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $email_1 = filter_input(INPUT_POST, "email_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $telefone_1 = filter_input(INPUT_POST, "telefone_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $celular_1 = filter_input(INPUT_POST, "celular_1", FILTER_SANITIZE_MAGIC_QUOTES);
    //contato 2
    $cargo_2 = filter_input(INPUT_POST, "cargo_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $email_2 = filter_input(INPUT_POST, "email_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $telefone_2 = filter_input(INPUT_POST, "telefone_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $celular_2 = filter_input(INPUT_POST, "celular_2", FILTER_SANITIZE_MAGIC_QUOTES);


    $i = new CadastrarAll;
    $i->setCargo_1($cargo_1);
    $i->setEmail_1($email_1);
    $i->setTelefone_1($telefone_1);
    $i->setCelular_1($celular_1);
    $i->setCargo_2($cargo_2);
    $i->setEmail_2($email_2);
    $i->setTelefone_2($telefone_2);
    $i->setCelular_2($celular_2);
    $i->inserir_novo_contato();
?>