<?php
class Contato { //criei uma classe
    private $nome; //criado variáveis privada
    private $email;
    private $telefone;

    public function _construct($nome,$email,$telefone){//Crie uma função
        $this->nome = $nome; // "$this" para usar as variavéis fora da função mas dentro da classe.
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() { //crie uma função c/método Get p/visualizar informações s/indicar parâmentros  "getNome()", () está vazio s/parâmentros
        return $this->nome;
    }
    public function getEmail() { 
        return $this->email;
    }
    public function getTelefone() { 
        return $this->telefone;
    }
}    

?>