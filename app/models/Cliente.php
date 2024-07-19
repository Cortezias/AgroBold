<?php
class Cliente {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM clientes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, email, telefone, estado, cidade) VALUES (:nome, :email, :telefone, :estado, :cidade)");
        $stmt->execute([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'telefone' => $data['telefone'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone, estado = :estado, cidade = :cidade WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'nome' => $data['nome'],
            'email' => $data['email'],
            'telefone' => $data['telefone'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade']
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM clientes WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public function getByStateAndCity($estado, $cidade) {
        $stmt = $this->pdo->prepare("SELECT * FROM clientes WHERE estado LIKE :estado AND cidade LIKE :cidade");
        $stmt->execute([
            'estado' => "%$estado%",
            'cidade' => "%$cidade%"
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
