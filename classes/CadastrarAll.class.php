<?php

require_once "Crud.class.php";

class CadastrarAll extends Conexao {
    
    //******Contatos*******//
    private $cargo_1;
    private $email_1;
    private $telefone_1;
    private $celular_1;

    private $cargo_2;
    private $email_2;
    private $telefone_2;
    private $celular_2;


    public function setCargo_1($cargo_1){
        $this->cargo_1 = $cargo_1;
    }
    public function setEmail_1($senha){
        $this->email_1 = $email_1;
    }

    public function setTelefone_1($telefone_1){
        $this->telefone_1 = $telefone_1;
    }
    public function setCelular_1($celular_1){
        $this->celular_1 = $celular_1;
    }

    public function setCargo_2($cargo_2){
        $this->cargo_2 = $cargo_2;
    }
    public function setEmail_2($senha){
        $this->email_2 = $email_2;
    }

    public function setTelefone_2($telefone_2){
        $this->telefone_2 = $telefone_2;
    }
    public function setCelular_2($celular_2){
        $this->celular_2 = $celular_2;
    }


    public function getCargo_1(){
        return $this->cargo_1;
    }
    public function getEmail_1(){
        return $this->email_1;
    }
    public function getTelefone_1(){
        return $this->telefone_1;
    }
    public function getCelular_1(){
        return $this->celular_1;
    }

    public function getCargo_2(){
        return $this->cargo_2;
    }
    public function getEmail_2(){
        return $this->email_2;
    }
    public function getTelefone_2(){
        return $this->telefone_2;
    }
    public function getCelular_2(){
        return $this->celular_2;
    }


    public function inserir_novo_contato(){
        $pdo = parent::getDB();
        echo "cheguei na func";
        // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud = new Crud('contatos');  

           $crud->inserir("cargo,email,telefone,celular,tipo, organizacao_id",
                          "'$this->cargo_1', '$this->email_1', '$this->telefone_1', 
                          '$this->celular_1', '1', ''"); 

            $crud->inserir("cargo,email,telefone,celular,tipo, organizacao_id",
                          "'$this->cargo_2', '$this->email_2', '$this->telefone_2', 
                          '$this->celular_2', '2', ''"); 

           
       
    }
   
   }
   
?>
