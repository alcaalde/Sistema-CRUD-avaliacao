<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $id) {
?>

<br>
<div class="caixa">
    <h4>Editar Cadastro de Livro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="hidden" id="id" name="id">
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome do produto</label>
            <input value="<?php echo $linha['nome']; ?>" type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="mb-3">
            <label for="autor" class="form-label">Nota</label>
            <input value="<?php echo $linha['nota']; ?>" type="text" class="form-control" id="nota" name="nota" required>
        </div>
        
        <div class="mb-3">
            <label for="genero" class="form-label">Comentário</label>
            <input value="<?php echo $linha['comentario']; ?>" type="text" class="form-control" id="comentario" name="comentario" required>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   
</div>
<br><br>

<?php
    }
}
?>
