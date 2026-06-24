<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Firebase\JWT\JWT; // Pastikan sudah install library JWT via composer
use Firebase\JWT\Key;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $header = $request->getServer('HTTP_AUTHORIZATION');
        
        if (!$header) {
            return service('response')->setJSON(['error' => 'Token tidak ditemukan'])->setStatusCode(401);
        }

        try {
            $token = explode(' ', $header)[1];
            // Validasi JWT (Gunakan kunci rahasia yang sama dengan saat login)
JWT::decode($token, new Key('ini_adalah_kunci_rahasia_yang_sangat_panjang_dan_aman_1234567890_abcde', 'HS256'));        } catch (\Exception $e) {
            return service('response')->setJSON(['error' => 'Token tidak valid / Sesi habis'])->setStatusCode(401);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}