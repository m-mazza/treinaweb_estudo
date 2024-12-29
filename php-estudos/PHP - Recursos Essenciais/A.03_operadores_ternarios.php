<?php

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/1/subaula/5

    $nota = 10;
    
    // if($nota > 5){
    //     echo  $resultado = "Aprovado";
    // } else {
    //     echo $resultado = "Reprovado";
    // }

    // condicao ? verdadeiro : falso;

    //echo $resultado = $nota > 5 ? "Aprovado" : "Reprovado";

    echo $resultado = $nota > 5 ? ($nota > 9 ? "Muito Bem" : "Aprovado") : "Reprovado";
    // acima é um ternário aninhado

?>