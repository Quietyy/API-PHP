<?php 

require_once __DIR__ . '/../../../apiCore/config.php';
require_once __DIR__ . '/../../../apiCore/response.php';
 

    echo response::json(200, 'A API está ativa!');