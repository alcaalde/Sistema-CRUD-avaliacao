<?php

include 'db.php';  // Incluindo a conexão com o banco de dados

// Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];  // Campo 'nome'
$nota = $_POST['nota'];    // Campo 'nota'
$comentario = $_POST['comentario'];  // Campo 'comentario' - novo campo

// Atualiza o livro na tabela 'produto'
$query = "UPDATE produto 
          SET nome='$nome', nota='$nota', comentario='$comentario' 
          WHERE id=$id";

// Executa a consulta
if (mysqli_query($conexao, $query)) {
    // Redireciona para a página de cadastros após o sucesso
    header('Location: index.php?pagina=cadastros');
} else {
    // Caso ocorra um erro, exibe a mensagem
    echo "Erro ao atualizar o livro: " . mysqli_error($conexao);
}
?>
