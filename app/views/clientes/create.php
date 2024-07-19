<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Adicionar Cliente</h1>
        <form action="index.php?action=store" method="post">
            <div class="form-group">
                <label for="nome"><i class="fas fa-user"></i> Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone"><i class="fas fa-phone"></i> Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="estado"><i class="fas fa-map-marker-alt"></i> Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="cidade"><i class="fas fa-city"></i> Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a href="index.php" class="btn btn-secondary"><i class="fas fa-times"></i> Cancelar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
