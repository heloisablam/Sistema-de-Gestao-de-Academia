<?php
require "Sistema.php";

$aluno = new Aluno($_POST['nome'], $_POST['contato']);



$exercicio1 = new Exercicio("Supino", "Peito");
$exercicio2 = new Exercicio("Agachamento", "Perna");
$exercicio3 = new Exercicio("Leg Press", "Perna");
$pilates = new ExercicioPilates("Pilates Solo", "Core abdominal", 30, 10);

$treino = new Treino("Treino A");

$treino->adicionarExercicio($exercicio1);
$treino->adicionarExercicio($exercicio2);
$treino->adicionarExercicio($exercicio3);

$plano = new Plano("Mensal", 99.90);

echo "ACADEMIA <br><br>";

echo "Aluno: " . $aluno->getNome() . "<br>";

echo "Plano: " . $plano->getNome() . "<br>";

echo "Valor: R$ " . $plano->getValor() . "<br>";

echo "Treino: " . $treino->getNome() . "<br><br>";

echo "Exercícios:<br>";



?>