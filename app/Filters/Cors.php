<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Cors implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Mengizinkan akses dari domain apapun (atau ganti * dengan localhost:8080/URL frontendmu)
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
        
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die(); // Menghentikan request OPTIONS agar tidak memproses route
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}