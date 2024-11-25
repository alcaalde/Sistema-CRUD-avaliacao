<?php

include 'db.php';

$nome = $_POST['nome'];
$nota = $_POST['nota'];
$comentario = $_POST['comentario'];

$query = "INSERT INTO produto (nome, nota, comentario) 
VALUES ('$nome', '$nota', '$comentario')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
