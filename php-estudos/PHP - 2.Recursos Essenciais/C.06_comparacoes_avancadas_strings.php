<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/6
   
    var_dump(strcmp('aa', 'aa')); //especifica para trabalhar com strings

    if(strcmp('aa', 'aa') === 0){ // é case sensitive
        echo 'é tudo igual';
    }

    if(strcasecmp('Aa', 'aa') ==== 0){ // não é case sensitive
        echo 'é tudo igual 2';
    }

?>