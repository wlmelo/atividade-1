<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Back End II</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">

<?php

use Aluno\Aluno;
use Turma\Turma;

include_once 'Model/Aluno.php';
include_once 'Model/Turma.php';

$aluno1 = new Aluno();
$aluno1->addDados(
  'Rafael A. Florindo', '22375016-5', 'M', 8.5, 9.2, 4.3, 9.5
);

$aluno2 = new Aluno();
$aluno2->addDados(
  'Flavia L. Matuzawa', '26215789-4', 'F', 8.5, 9.5, 10.0, 9.5
);

$aluno3 = new Aluno();
$aluno3->addDados(
  'Wellington I. Yoshida', '24150765-2', 'M', 5.5, 9.2, 10.0, 9.5
);

$aluno4 = new Aluno();
$aluno4->addDados(
  'Jandira P. Barroso', '25433160-9', 'F', 6.5, 9.5, 2.0, 9.5
);

$aluno5 = new Aluno();
$aluno5->addDados(
  'Pietro M. Oliveira', '26703401-0', 'M', 6.5, 3.5, 10.0, 9.5
);

$aluno6 = new Aluno();
$aluno6->addDados(
  'Carlos Danilo', '21723345-3', 'M', 4.8, 9.0, 5.5, 4.3
);

$alunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5, $aluno6];

$turma = new Turma('A-150');

foreach ($alunos as $aluno) {
  $turma->addAluno($aluno);
}

?>

        <div class="msg-topo">
            <h1>Controle de Notas de Turma</h1>
        </div>
        <div class="msg-turma">
            <h2>- Notas dos alunos da Turma <?=$turma->getTurma()?> -<h2>
        </div>

        <div class="msg-media">
            <h3> » Média da Turma: <u><?= $turma->mediaTurma() ?></u></h3>
        </div>

<?= $turma->printTurma()?>

        <br>
        <br>
        <br>
        <div class="footer">
            <h6>Desenvolvido por Wallace Melo | Atividade 1 da Disciplina de Back End II | 2021 Unicesumar</h6>
        </div>
    </div>

    <script src="js/functions.js"></script>

</body>
</html>