<?php
// app/controllers/UserController.php
require_once '../app/models/BukuModel.php';

class BukuController {
    private $BukuModel;

    public function __construct() {
        $this->BukuModel = new Buku();
    }

    public function index() {
        $BukuController = $this->BukuModel->getAllBuku();
        require_once '../app/views/user/index.php';

    }

    public function create() {
        require_once '../app/views/user/create.php';
    }

    public function store() {
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun'];
        $this->BukuModel->add($id_buku, $judul_buku, $pengarang, $tahun);
        header('Location: /user/index');
    }
    // Show the edit form with the user data
    public function edit($id_buku) {
        $BukuController = $this->BukuModel->find($id_buku); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/user/edit.php';
    }

    // Process the update request
    public function update($id_buku, $data) {
        $updated = $this->BukuModel->update($id_buku, $data);
        if ($updated) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id_buku) {
        $deleted = $this->BukuModel->delete($id_buku);
        if ($deleted) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
