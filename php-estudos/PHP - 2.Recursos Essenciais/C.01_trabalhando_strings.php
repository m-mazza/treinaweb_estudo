<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/1

    /*  strings, são conjutos de caracteres. Assim sendo é possível manipulá-los como se fossem arrays.
        abaixo, ao acessar o indice 10, será exposto o décimo item desse 'array'. Que é a letra C.
     
        também conseguimos trocar um elemento da string, ao acessá-la como um array conform exp 2.
    */

    $nome = 'Treinaweb Cursos';

    // exp 1
    var_dump($nome[10]);

    // exp 2
    var_dump($nome[10] = 'c');
    // visualizamos a troca de letras
    var_dump($nome);
      
?>