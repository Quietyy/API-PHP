<?php 

class response
{
public static function json($status = 200, $message = 'Sucesso', $data = null)
 


{   
    header('Content-Type: application/json');

    // Confere se a API esta ativa
    if (!API_ESTA_ATIVA){
        return json_encode([
            'status' => 400,
            'menssage' => 'A Api não está ativa',
            'time_response' => time(),
            'datetime_response' => date('Y-m-d H:i:s'),  
            'data' => null    
        ]);
    }
    return json_encode([
        'status' => $status,
            'menssage' => $message,
            'VERSAO_API' => VERSAO_API,
            'time_response' => time(),
            'datetime_response' => date('Y-m-d H:i:s'),  
            'data' => $data
    ]);
}


}  