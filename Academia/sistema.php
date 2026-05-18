<?php

class Exercicio {

    private $nome;
    private $descricao;

    public function __construct($nome, $descricao) {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}


class Treino {

    private $nome;
    private $exercicios = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function adicionarExercicio($exercicio) {
        $this->exercicios[] = $exercicio;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getExercicios() {
        return $this->exercicios;
    }

    public function setExercicios($exercicios) {
        $this->exercicios = $exercicios;
    }
}


class Plano {

    private $nome;
    private $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}


class Aluno {

    private $nome;
    private $contato;

    public function __construct($nome, $contato) {
        $this->nome = $nome;
        $this->contato = $contato;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }
}


class Matricula {

    private $aluno;
    private $plano;
    private $data;

    public function getAluno() {
        return $this->aluno;
    }

    public function setAluno($aluno) {
        $this->aluno = $aluno;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function setPlano($plano) {
        $this->plano = $plano;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
}

?>