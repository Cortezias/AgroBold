<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Registro de Clientes</h1>
        
        <div class="row mb-4">
            <div class="col-md-8">
                <form class="form-inline" id="search-form">
                    <input type="hidden" name="action" value="search">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="estado" class="sr-only">Estado</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="estado" name="estado" placeholder="Buscar por Estado">
                        </div>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="cidade" class="sr-only">Cidade</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                            </div>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Buscar por Cidade">
                        </div>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="cidade" class="sr-only">Nome</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="text" class="form-control" id="cidade" name="nome" placeholder="Buscar por Nome">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> Buscar</button>
                </form>
            </div>
            <div class="col-md-4 text-right">
                <a href="index.php?action=create" class="btn btn-primary"><i class="fas fa-user-plus"></i> Adicionar Cliente</a>
            </div>
        </div>
        
        <table class="table table-striped" id="clientes-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Estado</th>
                    <th>Cidade</th>
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
                        <td><?= $cliente['cidade'] ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $cliente['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                            <a href="index.php?action=delete&id=<?= $cliente['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Excluir</a>
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
