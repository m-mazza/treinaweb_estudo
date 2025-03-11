<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/8

    $frase = 'Treinaweb Cursos';
    
    $posicaoR = strpos($frase, 'r'); // encontra a primeira ocorrêcia da letra R na string passada como argumento
    //essa função recebe um 3 argumento que mostra a partir de qual indice da 'frase' ele quer comerçar buscando.

    var_dump($posicaoR);
    echo '<br>';

    echo $fraseModificada = str_replace('r', '*', $frase);
?>