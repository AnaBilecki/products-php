<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/back-button.php"); ?>
        <h1>Detalhes do Produto #<?= $product["id"] ?></h1>
        <div class="data-wrapper">
            <p>Nome:</p>
            <span><?= $product["name"] ?></span>
        </div>
        <div class="data-wrapper">
            <p>Descrição:</p>
            <span><?= $product["description"] ?></span>
        </div>
        <div class="data-wrapper">
            <p>Preço:</p>
            <span><?= "R$ " . $product["price"] ?></span>
        </div>
        <div class="data-wrapper">
            <p>Quantidade:</p>
            <span><?= $product["quantity"] ?></span>
        </div>
        <div class="date-info-container">
            <div class="date-info">
                <p>Criado em:</p>
                <span><?= DateTime::createFromFormat('Y-m-d H:i:s', $product["created_at"])->format('d/m/Y H:i:s') ?></span>
            </div>
            <div class="vertical-separator"></div>
            <div class="date-info">
                <p>Atualizado em:</p>
                <span><?= DateTime::createFromFormat('Y-m-d H:i:s', $product["updated_at"])->format('d/m/Y H:i:s'); ?></span>
            </div>
        </div>
    </div>
<?php
    include_once("templates/footer.php");
?>