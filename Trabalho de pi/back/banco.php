<?php

define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "cippi");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

if (!$mysqli) {
    setcookie("bancoOff","Sim",time() + 120);
}else{
    setcookie("bancoOn","Sim",time() + 120);
}

?>