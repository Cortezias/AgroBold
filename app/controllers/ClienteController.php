<?php
require_once 'app/models/Cliente.php';

class ClienteController {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function handleRequest() {
        $action = $_GET['action'] ?? 'index';
        
        switch ($action) {
            case 'create':
                $this->create();
                break;
            case 'store':
                $this->store();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            case 'search':
                $this->search();
                break;
            default:
                $this->index();
                break;
        }
    }

    public function index() {
        $cliente = new Cliente($this->pdo);
        $clientes = $cliente->getAll();
        include 'app/views/clientes/index.php';
    }

    public function create() {
        include 'app/views/clientes/create.php';
    }

    public function store() {
        $cliente = new Cliente($this->pdo);
        $cliente->create($_POST);
        header('Location: index.php');
    }

    public function edit() {
        $id = $_GET['id'];
        $cliente = new Cliente($this->pdo);
        $data = $cliente->getById($id);
        include 'app/views/clientes/edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $cliente = new Cliente($this->pdo);
        $cliente->update($id, $_POST);
        header('Location: index.php');
    }

    public function delete() {
        $id = $_GET['id'];
        $cliente = new Cliente($this->pdo);
        $cliente->delete($id);
        header('Location: index.php');
    }

    public function search() {
        $estado = $_GET['estado'];
        $cliente = new Cliente($this->pdo);
        $clientes = $cliente->getByState($estado);
        include 'app/views/clientes/index.php';
    }
}
?>
