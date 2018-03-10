<?php

require_once "aluno.php";
require_once "matricula.php";
require_once "turma.php";

$lucas = new Aluno("Lucas", "lucas@lucas.com");
$turma = new Turma("501", "sabado");
echo $lucas->getNome();
echo "<br>";
echo $turma->getCurso();
echo "<br>";