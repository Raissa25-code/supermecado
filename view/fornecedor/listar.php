<?php
    require('../../vendor/autoload.php');
    require('../includes/cabecalho.php');
    require('../includes/menu.php');
?>

<main class="container mb-5 mt-3">
    <h1 class="text-center">Listar Fornecedores</h1>

    <table class="table table-striped table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $fornecedores = $fornecedor->listar();

                foreach ($fornecedores as $fornecedor) {
            ?>
                <tr>
                    <td><?= $fornecedor['id'] ?></td>
                    <td><?= $fornecedor['nome'] ?></td>
                    <td><?= $fornecedor['cnpj'] ?></td>
                    <td><?= $fornecedor['telefone'] ?></td>
                    <td><?= $fornecedor['email'] ?></td>
                    <td><?= $fornecedor['endereco'] ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</main>

<?php
    require('../includes/rodape.php');
?>