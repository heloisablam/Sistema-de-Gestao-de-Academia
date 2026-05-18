<?php

require "sistema.php";

$exercicio1 = new Exercicio("Supino", "Peito");
$exercicio2 = new Exercicio("Agachamento", "Perna");
$exercicio3 = new Exercicio("Leg Press", "Perna");

$treino = new Treino("Treino A");

$treino->adicionarExercicio($exercicio1);
$treino->adicionarExercicio($exercicio2);
$treino->adicionarExercicio($exercicio3);

$plano = new Plano("Mensal", 99.90);

$aluno = new Aluno("Heloisa", "(42) 99999-9999");

echo "ACADEMIA <br><br>";

echo "Aluno: " . $aluno->getNome() . "<br>";

echo "Plano: " . $plano->getNome() . "<br>";

echo "Valor: R$ " . $plano->getValor() . "<br>";

echo "Treino: " . $treino->getNome() . "<br><br>";

echo "Exercícios:<br>";

echo "- " . $exercicio1->getNome() . "<br>";
echo "- " . $exercicio2->getNome() . "<br>";
echo "- " . $exercicio3->getNome() . "<br>";

?>