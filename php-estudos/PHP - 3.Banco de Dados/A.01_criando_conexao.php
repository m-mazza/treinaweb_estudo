<?php

    //orientado a objeto
    // $conn = new mysqli('servidor', 'usuario', 'senha', 'nome_do_banco')
    $conn = new mysqli('localhost', 'root', '', 'treinaweb');
    var_dump($conn);

    //procedural
    // $conn = mysqli_connect('servidor', 'usuario', 'senha', 'nome_do_banco')
    $conn2 = mysqli_connect('localhost', 'root', '', 'treinaweb');
    var_dump($conn2);

?>