<?php

namespace Aluno;

class Aluno
{
  protected $nome;
  protected $ra;
  protected $genero;
  protected $nota1;
  protected $nota2;
  protected $nota3;
  protected $nota4;

  public function addDados($nome, $ra, $genero, $nota1, $nota2, $nota3, $nota4)
  {
    $this->setNome($nome);
    $this->setRa($ra);
    $this->setGenero($genero);
    $this->setNota1($nota1);
    $this->setNota2($nota2);
    $this->setNota3($nota3);
    $this->setNota4($nota4);
  }

  private function setNome($nome): int
  {
    if (is_string($nome)) {
      $this->nome = $nome;
      return 1;
    } else {
      return 0;
    }
  }

  public function getNome()
  {
    return $this->nome;
  }

  private function setRa($ra): int
  {
    if (strlen($ra) <= 12) {
      $this->ra = $ra;
      return 1;
    } else {
      return 0;
    }
  }

  public function getRa()
  {
    return $this->ra;
  }

  private function setGenero($genero): int
  {
    if (is_string($genero)) {
      $this->genero = $genero;
      return 1;
    } else {
      return 0;
    }
  }

  public function getGenero()
  {
    return $this->genero;
  }

  private function setNota1($nota1): int
  {
    if (is_float($nota1)) {
      $this->nota1 = $nota1;
      return 1;
    } else {
      return 0;
    }
  }

  public function getNota1()
  {
    return $this->nota1;
  }

  private function setNota2($nota2): int
  {
    if (is_float($nota2)) {
      $this->nota2 = $nota2;
      return 1;
    } else {
      return 0;
    }
  }

  public function getNota2()
  {
    return $this->nota2;
  }

  private function setNota3($nota3): int
  {
    if (is_float($nota3)) {
      $this->nota3 = $nota3;
      return 1;
    } else {
      return 0;
    }
  }

  public function getNota3()
  {
    return $this->nota3;
  }

  private function setNota4($nota4): bool
  {
    if (is_float($nota4)) {
      $this->nota4 = $nota4;
      return true;
    } else {
      return false;
    }
  }

  public function getNota4()
  {
    return $this->nota4;
  }

  public function getMedia(): float
  {
    $media = ( $this->getNota1() + $this->getNota2() + $this->getNota3() + $this->getNota4() ) / 4;
    return $media;
  }
}