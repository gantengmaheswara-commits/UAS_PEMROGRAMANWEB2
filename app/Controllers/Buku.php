<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class Buku extends ResourceController 
{
    public function create() {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated(['message' => 'Data berhasil ditambah']);
    }

    public function index() {
        return $this->respond(['status' => 'Controller Buku berhasil terpanggil']);
    }
} 