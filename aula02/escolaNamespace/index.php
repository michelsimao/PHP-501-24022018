<?php

require_once "Aluno/Aluno.php";
require_once "Curso/Curso.php";
require_once "Matricula/Matricula.php";
require_once "Turma/Turma.php";

echo "<pre>";

$lucas = new Aluno("Lucas", "lucas@lucas.com");
$php = new Curso("PHP", 40);
$turma = new Turma($php, "sabado");
$mat = new Matricula($lucas, $turma);

echo $mat->getTurma()->getCurso()->getNome();