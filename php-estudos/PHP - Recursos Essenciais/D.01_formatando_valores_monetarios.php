<?php
       

    // link da aula: http://treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/4/subaula/8

    $valor = 1879.85;
    $valor += 10;
    
    $real = 'R$ '.number_format($valor, 2, ',','.');



    var_dump($real);
?>