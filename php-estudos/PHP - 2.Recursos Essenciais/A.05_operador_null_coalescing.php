<?php

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/1/subaula/7

    $valor = [
        "php"   => 7.2,
        "Dart"  => 2,
        //"C#"    => 9
    ];

    //$cSharp = isset($valor["C#"]) ? 'curso C# '.$valor["C#"] : "curso de C# não econtrado";
    $cSharp = $valor["C#"] ?? "curso de C# não econtrado";
    echo $cSharp;
?>