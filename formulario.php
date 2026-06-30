<?php
require "Sistema.php";
require "FormaPagamento.php";
require "PagamentoPix.php";
require "PagamentoCartao.php";
require "exercicioPilates.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Academia</title>
</head>

<body>

<h2>Cadastro de Matrícula</h2>

<form method="POST">

    Nome:<br>
    <input type="text" name="nome"><br><br>

    Contato:<br>
    <input type="text" name="contato"><br><br>

    Plano:<br>
    <select name="plano">
        <option value="Mensal">Mensal</option>
        <option value="Trimestral">Trimestral</option>
        <option value="Anual">Anual</option>
    </select>
    <br><br>

    Forma de Pagamento:<br>
    <select name="pagamento">Pagamento</option>
        <option value="Pix">Pix</option>
        <option value="Cartão">Cartão</option>
    </select>
    <br><br>

    Exercício Pilates:<br>
    Nome <br>
    <input type="text" name="nome"> <br>
    Tempo <br>
    <input type="text" name="tempo">
    <br><br>


    <input type="submit" value="Cadastrar">

</form>

<hr>

<?php

if ($_POST) {

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $tipoPlano = $_POST['plano'];
    $tipoPagamento = $_POST['pagamento'];
    $tipoExercicios = $_POST['exercicios'];

    if ($tipoPlano == "Mensal") {
        $plano = new Plano("Mensal", 99.90);
    }

    if ($tipoPlano == "Trimestral") {
        $plano = new Plano("Trimestral", 250);
    }

    if ($tipoPlano == "Anual") {
        $plano = new Plano("Anual", 900);
    }

    $aluno = new Aluno($nome, $contato);

    if ($tipoPagamento == "Pix") {
        $pagamento = new PagamentoPix();
    }

    if ($tipoPagamento == "Cartão") {
        $pagamento = new PagamentoCartao();
    }

    if ($tipoExercicios == "Exercicio1") {
        $exercicios = new Exercicio1();
    }

    if ($tipoExercicios == "Exercicio2") {
        $exercicios = new Exercicio2();
    }

    $matricula = new Matricula();

    $matricula->setAluno($aluno);
    $matricula->setPlano($plano);
    $matricula->setData(date("d/m/Y"));
    $matricula->setPagamento($pagamento);
    $matricula->setExercicios($exercicios);

    echo "<h3>Matrícula Realizada</h3>";

    echo "Aluno: " . $matricula->getAluno()->getNome() . "<br>";

    echo "Contato: " . $matricula->getAluno()->getContato() . "<br>";

    echo "Plano: " . $matricula->getPlano()->getNome() . "<br>";

    echo "Valor: R$ " . $matricula->getPlano()->getValor() . "<br>";

    echo "Data: " . $matricula->getData() . "<br>";

   echo "Pagamento: " . $matricula->getPagamento()->pagar() . "<br>";

   echo "Treino: " . $matricula->getExercicios()->getNome() . "<br>";
}

?>

</body>
</html>
