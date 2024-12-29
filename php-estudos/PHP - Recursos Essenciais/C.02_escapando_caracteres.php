<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/2

    $nome = 'Treinaweb Cursos';

    var_dump($nome[10]);
    var_dump($nome[10] = 'c');
    var_dump($nome);
      
    //echo "<h1 style="color:blue">Treinaweb Cursos</h1>";  //errado
    echo "<h1 style='color:blue'>Treinaweb Cursos</h1>";    //certo 
    echo '<h1 style="color:blue">Treinaweb Cursos</h1>';    //certo

    echo "<h1 style=\"color:blue\">Treinaweb Cursos</h1>";  //escapando os caracteres
    echo '<h1 style=\'color:blue\'>Treinaweb Cursos</h1>';  //escapando os caracteres

    echo "Eu tenho R\$mil reais<br>";

    echo "\\192.168.10.10\minha-pasta\\";

?>