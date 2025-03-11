<?php
       

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/3/subaula/5
   
    $curso  = "C#";    
    $versao = 9;
    $padrao = "Curso de %s versão - %0.1f";

    echo $resultado = sprintf($padrao, $curso, $versao);
    // recebe 3 argumentos, o texto (com as formataçôes) e os valores que vão substituir
    echo "<br>";
    printf("Curso de %s versão - %0.1f", $curso, $versao);
    // mesma coisa que o sprintf, mas imprime direto
    echo "<br>";
    $entrada = ["PHP", 7.4];
    echo $resultado = vsprintf("Curso de %s versão - %0.1f", $entrada);
    //recebe dois argumentos, o texto e um array. Afunção distribui os valores aos arrays
    echo "<br>";
    vprintf("Curso de %s versão - %0.1f", $entrada);
    //mesma coisa que o vsprintf





?>