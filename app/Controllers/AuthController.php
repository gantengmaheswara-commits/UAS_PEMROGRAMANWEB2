<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends ResourceController
{
    // Gunakan secret key yang kompleks untuk produksi
private $secretKey = 'ini_adalah_kunci_rahasia_yang_sangat_panjang_dan_aman_1234567890_abcde';
    public function login()
    {
        $db = \Config\Database::connect();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // 1. Ambil user berdasarkan username
        $user = $db->table('users')->where('username', $username)->get()->getRowArray();

        // 2. Cek apakah user ada & verifikasi password
        // $password (input) dibanding dengan $user['password'] (hash dari DB)
        if (!$user || !password_verify($password, $user['password'])) {
            return $this->failUnauthorized('Username atau password salah');
        }

        // 3. Payload untuk JWT
        $payload = [
            "iss" => "localhost",
            "iat" => time(),
            "exp" => time() + 3600, // Token berlaku 1 jam
            "uid" => $user['id'],
            "role" => $user['role']
        ];

        // 4. Generate Token
        $token = JWT::encode($payload, $this->secretKey, 'HS256');

        // 5. Kirim respon sukses
        return $this->respond([
            'status' => 200,
            'message' => 'Login Berhasil',
            'token' => $token
        ]);
    }
}