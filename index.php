<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <h1>Produtos</h1>
        <?php if(count($products) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product): ?>
                        <tr>
                            <td scope="row"><?= $product["id"] ?></td>
                            <td scope="row"><?= $product["name"] ?></td>
                            <td scope="row"><?= $product["quantity"] ?></td>
                            <td scope="row"><?= "R$ " . $product["price"] ?></td>
                            <td class="actions">
                                <i class="fa-regular fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-regular fa-trash-can"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        <?php else: ?>
            <div id="empty-list-container">
                <img src="img/empty.png" alt="Caixa vazia">
                <p id="empty-list-message">Ainda não há produtos cadastrados.</p>
            </div>
        <?php endif; ?>
    </div>
<?php
    include_once("templates/footer.php");
?>