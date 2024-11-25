<br>
<div class="caixa">
    <h4>Novo Cadastro de Avaliação</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome do produto</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="mb-3">
            <label for="autor" class="form-label">Nota</label>
            <input type="text" class="form-control" id="nota" name="nota" required>
        </div>
        
        <div class="mb-3">
            <label for="genero" class="form-label">Comentário</label>
            <input type="text" class="form-control" id="cometario" name="comentario" required>
</div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>   
</div>
<br><br>
