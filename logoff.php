<?php

session_start();

echo '<pre>';
print_r($_SESSION);
echo '<pre>';

//  unset($_SESSION['x']); REMOVE SOMENTE A VARIAVEL DE SESSAO DE ACORDO COM O INDEX PASSADO
//  session_destroy(); REMOVE TODOS AS VARIAVEIS DE SESSÃO


session_destroy();
header('Location: index.php');
