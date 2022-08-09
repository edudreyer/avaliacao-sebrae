<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//dados do banco no servidor local
$banco = 'table';
$host = 'mysql';
$usuario = 'eduardodreyer';
$senha = 'eduardodreyer';

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$host;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
	echo "Erro ao conectar com o banco de dados! " . $e;
}