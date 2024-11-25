<div class="caixa">
    <h4 class="text-center fw-bold mb-4">Sistema de Avaliações</h4>
    <a type="button" class="btn btn-success mb-3" href="?pagina=novoCadastro">
        <i class="bi bi-plus"></i> Cadastrar produto
    </a>
    <div>
        <table id="table_id" class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nome do produto</th>
                    <th>Nota</th>
                    <th>Comentário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['nota'] . '</td>';
                    echo '<td>' . $linha['comentario'] . '</td>';
                    echo '<td>
                        <div class="d-flex justify-content-around">
                            <form method="post" action="?pagina=editaCadastro" class="d-inline">
                                <input type="hidden" name="id" value="' . $linha['id'] . '">
                                <button type="submit" class="btn btn-outline-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                            <form method="post" action="deletaCadastro.php" class="d-inline">
                                <input type="hidden" name="id" value="' . $linha['id'] . '">
                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Excluir">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
