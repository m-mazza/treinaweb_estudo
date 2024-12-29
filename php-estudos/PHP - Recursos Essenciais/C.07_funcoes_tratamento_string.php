<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/7
   
    var_dump(strtoupper('Treinaweb Cursos')); //converte uma string para letras maiúsculas
    echo '<br>';
    var_dump(strtolower('Treinaweb Cursos')); //converte uma string para letras minúsculas
    echo '<br>';
    var_dump(ucfirst('treinaweb cursos'));    //converte primeira letra da primeira palavra da String para maiúscula
    echo '<br>';
    var_dump(ucwords('treinaweb cursos'));    //converte primeira letra de cada palavra da string em maiúscula
    
    echo '<br>';

    var_dump(ltrim('      treinaweb     '));    //remove espaço da sring à esquerda
        
    echo '<br>';
    var_dump(rtrim('      treinaweb     '));    //remove espaço da sring à direita
    
    echo '<br>';
    var_dump(trim('      treinaweb     '));    //remove espaço da sring, quer direita ou esquerda

?>