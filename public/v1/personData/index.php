<?php 

require_once __DIR__ . '/../../../apiCore/config.php';
require_once __DIR__ . '/../../../apiCore/response.php';
 
$data = require_once __DIR__ . '/../../../apiCore/data.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
        } else {
            echo response::json(400, 'Erro', 'Falta parâmetros de ID');
            exit;
}

if($id <0 || $id> count($data) - 1){
    echo response:: json(400, 'error', 'Pessoa não encontrada');    
    exit;
}

echo response::json(200, 'Sucesso', $data[$id]);
