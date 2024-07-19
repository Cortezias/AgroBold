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
        $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, email, telefone, estado) VALUES (:nome, :email, :telefone, :estado)");
        $stmt->execute($data);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone, estado = :estado WHERE id = :id");
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM clientes WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public function getByState($estado) {
        $stmt = $this->pdo->prepare("SELECT * FROM clientes WHERE estado = :estado");
        $stmt->execute(['estado' => $estado]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
