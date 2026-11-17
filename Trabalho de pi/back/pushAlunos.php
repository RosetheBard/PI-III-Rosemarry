<?php
require_once('back/banco.php');

$query = "SELECT * FROM aluno";
$puxa = $mysqli->query($query);

$repeat = $puxa->num_rows;
