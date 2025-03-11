<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/4/subaula/9

    //ver mais => https://www.php.net/manual/pt_BR/ref.var.php

    var_dump(is_int(123));          //true (verifica se há o tipo inteiro)
    var_dump(is_int('123'));        //false (verifica se há o tipo inteiro)
    var_dump(is_float(123.00));     //true (verifica se há o tipo float)
    var_dump(is_float('123.00'));   //false (verifica se há o tipo float)

    var_dump(is_numeric(123));           //true (verifica se é um numérico)
    var_dump(is_numeric('123.00'));      //true (verifica se é um numérico)
    var_dump(is_numeric(123.00));        //true (verifica se é um numérico)

    var_dump(is_string('adfdsaf'));      //true (verifica se é uma string)
    var_dump(is_bool(false));           //true (verifica se é um booleano)

    var_dump(is_scalar("string"));      //true (verifica se é string, inteiro, float ou booleano)
    var_dump(is_scalar([1,2,4]));       //false (array não é escalar)

    

    // ver mais => https://www.php.net/manual/pt_BR/function.gettype.php

    var_dump(gettype("string")); 
    var_dump(gettype(123)); 
?>