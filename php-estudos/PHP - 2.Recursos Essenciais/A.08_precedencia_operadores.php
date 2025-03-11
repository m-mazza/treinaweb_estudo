<?php

    // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/1/subaula/10

    $a = 12 + 3;
    var_dump($a);

    var_dump(2 + 3 * 4);
    var_dump(2 + 12);
    var_dump(14);

    // caso queira alterar a ordem de precedência das operações usa-se ()
    var_dump((2 + 3) * 4);
    var_dump((5) * 4);
    var_dump(20);

    var_dump(3 + 4 - 5 + 5);
    var_dump(7 - 5 + 5);
    var_dump(2 + 5);
    var_dump(7);

    var_dump(3 + (4 - (5 + 5)));
    var_dump(3 + (4 - 10));
    var_dump(3 + -6);
    var_dump(-3);

?>