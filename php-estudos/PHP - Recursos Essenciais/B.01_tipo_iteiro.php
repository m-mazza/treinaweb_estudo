<?php

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/2/subaula/1

    //decbin($decima) <> bindec($binario) 
    //decoct($decimal) <> octdec($octal)
    //dechex($decimal) <> hexdec($hexadecimal)

    $dec = 980;
    $bin = 0b1111010100;
    $oct = 01724;
    $hex = 0x3d4;

    var_dump($dec, $bin, $oct, $hex);

    $int = PHP_INT_MAX;

    var_dump($int);

?>