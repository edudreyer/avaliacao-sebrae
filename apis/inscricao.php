<?php
include_once('conexao.php');
$postjson = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
  $result = json_encode(array('success' => false, 'result' => '0'));
  exit;
}

if (@$postjson['requisicao'] == 'lista') {
  
  //   {
  //     "requisicao" : "lista",
  //     "start" : "0",
  //     "limit" : "10"
  // }

  $query = $pdo->query("SELECT * from inscricoes where 1 = 1 order by codigo  desc limit $postjson[start], $postjson[limit]");
  $res = $query->fetchAll(PDO::FETCH_ASSOC);

  if (!empty($res)) {
    $result = json_encode(array('success' => true, 'result' => $res));
  } else {
    $result = json_encode(array('success' => false, 'msg' => 'Dados Incorretos!'));
  }
  echo $result;
  exit;
}