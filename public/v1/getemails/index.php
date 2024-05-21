<?php 

require_once __DIR__ . '/../../../apiCore/config.php';
require_once __DIR__ . '/../../../apiCore/response.php';
 
$data = require_once __DIR__ . '/../../../apiCore/data.php';

$email = [];

foreach($data as $person){
    if (filter_var($person['email'], FILTER_VALIDATE_EMAIL))
        $email_domain = explode('@', $person['email'])[1]; 
        if(!in_array($email_domain, $email)){
            $email[] = $email_domain;
        }

}

echo response::json(200, 'Sucesso', $email);