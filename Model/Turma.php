<?php

namespace Turma;

use Aluno\Aluno;

require_once 'Aluno.php';

class Turma
{
  protected $alunos;
  private $turma;
  private $qtdAlunos = 0;

  public function __construct($turma)
  {
    $this->setTurma($turma);
  }

  public function setTurma($turma):int
  {
    if (strlen($turma) <= 5) {
      $this->turma = $turma;
      return 1;
    } else {
      return 0;
    }
  }

  public function getTurma()
  {
    return $this->turma;
  }

  public function addAluno(Aluno $aluno)
  {
    if ($this->qtdAlunos <= 4) {
      $this->alunos[$this->qtdAlunos] = $aluno;
      $genMaiusc = ($aluno->getGenero() == 'M') ? 'O' : 'A';
      $genMinusc = ($aluno->getGenero() == 'M') ? 'o' : 'a';
      echo '        <div id="msg' . $this->qtdAlunos . '" class="box success"><b>Sucesso</b>: ' . $genMaiusc . ' alun' . $genMinusc . ' ' .  $aluno->getNome() . ' foi inserid' . $genMinusc . ' na turma.<div class="close" onclick="ocultar(`msg' . $this->qtdAlunos . '`)">×</div></div>' . "\n";
      $this->qtdAlunos++;
    } else {
      echo '        <div id="msg' . $this->qtdAlunos . '" class="box error"><b>Erro</b>: Turma Lotada!<div class="close" onclick="ocultar(`msg' . $this->qtdAlunos . '`)">×</div></div><br>';
    }
  }

  public function mediaTurma()
  {
    global $sumMediaAluno;
    $sumMediaAluno = 0;
    for ($i = 0; $i < count($this->alunos); $i++) {
      $sumMediaAluno += $this->alunos[$i]->getMedia();
    }
    $mediaTurma = $sumMediaAluno / count($this->alunos);
    return $mediaTurma;
  }

  public function printTurma()
  {
    foreach ($this->alunos as $aluno) {
      echo '
        <br><br>
          <table>
            <caption class="msg-aluno"> » ' . $aluno->getNome() . '</caption>
            <thead>
              <th class="bg-gray center">Nota 1</th>
              <th class="bg-gray center">Nota 2</th>
              <th class="bg-gray center">Nota 3</th>
              <th class="bg-gray center">Nota 4</th>
              <th class="bg-gray center">Média</th>
            </thead>
            <tbody>
              <tr>
                <td class="right">' . $aluno->getNota1() . '</td>
                <td class="right">' . $aluno->getNota2() . '</td>
                <td class="right">' . $aluno->getNota3() . '</td>
                <td class="right">' . $aluno->getNota4() . '</td>
                <td class="right">' . $aluno->getMedia() . '</td>
              </tr>
            </tbody>
          </table>
          <br>';
    }
  }
}