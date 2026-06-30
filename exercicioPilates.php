<?php
class ExercicioPilates extends Exercicio
{
    private $tempo;
    private $repeticoes;

    public function __construct($nome, $descricao, $tempo, $repeticoes)
    {
        parent::__construct($nome, $descricao);

        $this->tempo = $tempo;
        $this->repeticoes = $repeticoes;
    }

    public function getTempo()
    {
        return $this->tempo;
    }

    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }

    public function getRepeticoes()
    {
        return $this->repeticoes;
    }

    public function setRepeticoes($repeticoes)
    {
        $this->repeticoes = $repeticoes;
    }

    public function imprimir()
    {
        echo "<p>Nome: " . $this->getNome() . "</p>";
        echo "<p>Descrição: " . $this->getDescricao() . "</p>";
        echo "<p>Tempo: " . $this->tempo . "</p>";
        echo "<p>Repetições: " . $this->repeticoes . "</p>";
    }
}