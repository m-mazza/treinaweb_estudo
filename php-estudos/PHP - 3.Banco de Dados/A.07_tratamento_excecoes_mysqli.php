<?php

    // $conn = new mysqli('127.0.0.1', 'root', '', 'treinaweb');

    // if($conn->connect_errno){
    //     echo "código: ".$conn->connect_errno;
    //     echo "<br>mensagem:".$conn->connect_error;
    // }

    // $result = $conn->query('&%%5');

    // if(!$result){
    //     echo "código: ".$conn->errno;
    //     echo "<br>mensagem:".$conn->error;
    // }


    try {
        $conn = new mysqli('127.0.0.1', 'root', '', 'treinaweb');

        if($conn->connect_errno){
            throw new Exception($conn->connect_error, $conn->connect_errno);
        }
    
        $result = $conn->query('SELECT * FROM alunos');
    
        if(!$result){
            throw new Exception($conn->error, $conn->errno);
        }

        var_dump($result->fetch_all());
    
    } catch (\Throwable $e) {
        echo "código: ".$e->getCode();
        echo "<br>mensagem:".$e->getMessage();
    }

?>