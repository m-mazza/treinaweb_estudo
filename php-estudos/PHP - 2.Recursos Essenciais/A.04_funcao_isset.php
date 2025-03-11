<?php

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/1/subaula/6

    $valor = [
        "php"   => 7.2,
        "Dart"  => 2,
        "C#"    => 9
    ];

    //var_dump(isset($valor["c#"]));

    echo isset($valor["C#"]) ? 'curso CSharp '.$valor["C#"] : "curso de C# não econtrado";

?>