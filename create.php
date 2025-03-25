<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/back-button.php"); ?>
        <h1>Novo Produto</h1>
        <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group description-group">
                <label for="description">Descrição:</label>
                <textarea id="description" name="description" placeholder="Insira uma descrição" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="number" id="price" name="price" step="0.01" min="0" placeholder="0,00" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantidade:</label>
                <input type="number" id="quantity" name="quantity" min="0" placeholder="Digite a quantidade" required>
            </div>
            <div class="button-container">
                <a href="<?= $BASE_URL ?>/index.php">Cancelar</a>
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
<?php
    include_once("templates/footer.php");
?>