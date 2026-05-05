<?php
class Aluno {
    private $nome;
    private $contato;

    public function __construct($nome, $contato){
        $this->nome = $nome;
        $this->contato = $contato;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getContato(){
        return $this->contato;
    }
    public function setContato($contato){
        $this->contato = $contato;
    }

    public function imprimir(){
        echo "<p>Nome: " . $this->nome;
        echo "<p>Contato: " . $this->contato;
    }
}
?>