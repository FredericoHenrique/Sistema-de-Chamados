<?php

session_start();

// Montagem do chamado
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// abertura do arquivo
$arquivo = fopen('../../../projetos/Sistema chamados/arquivo.txt', 'a');

// difinindo a escrita
$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// escrevendo no arquivo
fwrite($arquivo, $texto);

// fechando o arquivo
fclose($arquivo);
header('Location: abrir_chamado.php');
