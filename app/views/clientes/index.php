<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="public/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Cadastro de Clientes</h1>
        <div class="text-right mb-3">
            <a href="index.php?action=create" class="btn btn-primary">Adicionar Cliente</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $cliente['id'] ?></td>
                        <td><?= $cliente['nome'] ?></td>
                        <td><?= $cliente['email'] ?></td>
                        <td><?= $cliente['telefone'] ?></td>
                        <td><?= $cliente['estado'] ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $cliente['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="index.php?action=delete&id=<?= $cliente['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>
