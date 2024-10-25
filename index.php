<?php
require 'config.php';
require 'src/dao/ProductDaoMySql.php';

$productDao = new ProductDaoMySql($pdo);

$list = $productDao->FindAll();

?>

<a href="register.php">Adicionar Produto</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>CATEGORY</th>
        <th>REGRISTER DATE</th>
        <th>ACTIONS</th>
    </tr>

    <?php foreach($list as $product): ?>
        <tr>
            <td><?= $product->getId(); ?></td>
            <td><?= $product->getName(); ?></td>
            <td><?= $product->getPrice(); ?></td>
            <td><?= $product->getCategory(); ?></td>
            <td><?= $product->getRegistrationDate(); ?></td>
            <td>
                <a href="editar.php?id=<?= $product->getId(); ?>">[ Editar ]</a>
                <a href="excluir.php?id=<?= $product->getId(); ?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

