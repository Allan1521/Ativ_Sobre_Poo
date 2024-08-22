<?php
    class GereciadorDeContatos { //Crie uma classe 
        private $contatos = [];//crie uma variável privada

        public function adicionarContato($nome, $email, $telefone){//crie a função para adicionar contatos
            $contato = new Contato($nome, $email, $telefone);
            $this->contatos[] = $contatos;
        }
        public function getContatos(){//crie a função no método "Get" para visualiar os contatos
           return $this->contatos;
        }
        public function deletarContato($indice){//crie a função para deletar contatos
            if (isset($this->contatos[$indice])){
                array_slice($this->caonttos, $indice, 1);
            }
        }
    
    }
?>