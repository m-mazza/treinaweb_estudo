<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/3

    $escola = "Treinaweb";
    $curso  = "C#";

    // esse é o HEREDOC
    // $conteudo = <<< HTML
    //     <h1 style="color: red">Olá $escola</h1>
    //     <p style="color:blue">Eaew $curso</p>
    // HTML;

    $conteudo = <<< 'HTML'
        <h1 style="color: red">Olá $escola</h1>
        <p style="color:blue">Bem-vindo ao curso $curso</p>
    HTML;
    
    echo $conteudo; 
?>