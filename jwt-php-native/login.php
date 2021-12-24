<?php

require_once('./vendor/autoload.php');

use Firebase\JWT\JWT;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type:application/json');


//Validasi Method Request
//Cek method request apkah post atu tidak
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit();
}


$json = file_get_contents('php://input');

$input = json_decode($json);

if (!isset($input->email) || !isset($input->password)) {
    http_response_code(400);
    exit();
}

$user = [
    'author' => 'sakapangestu',
    'email' => 'sakapangestuputra228@student.uns.ac.id',
    'password' => 'd3tiuns',
    'username' => 'sakapangestu'


];


if ($input->author !== $user['author'] || $input->email !== $user['email'] || $input->username !== $user['username'] || $input->password !== $user['password']) {
    echo json_encode([
        'message' => 'Data tidak sesuai'
    ]);
    exit();
}

//buat variabelutk menyimpan masa kadaluwarsa access tokennya
//15 * 60 detik = 15 menit
$expired_time = time() + (15 * 60);

//buat variabbel payload yg mana akan jadi payload token kita

$payload = [
    'email' => $input->email,
    'exp' => $expired_time
];


$access_token = JWT::encode($payload, $_ENV['ACCESS_TOKEN_SECRET']);
echo json_encode([
    'accessToken' => $access_token,
    'expiry' => date(DATE_ISO8601, $expired_time)
]);

$payload['exp'] = time() + (60 * 60);
$refresh_token = JWT::encode($payload, $_ENV['REFRESH_TOKEN_SECRET']);

setcookie('refreshTOkem', $refresh_token, $payload['exp'], '', '', false, true);
