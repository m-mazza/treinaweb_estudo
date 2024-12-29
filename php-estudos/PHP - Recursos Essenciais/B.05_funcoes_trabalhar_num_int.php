<?php
       

      // link da aula: https://www.treinaweb.com.br/painel/cursos/php-recursos-essenciais/aula/2/subaula/5

      //abs() -> retorna um número absoluto
      var_dump(abs(-6));
      var_dump(abs(6));

      //roud() -> recebe dois parâmetros: valor e a precisão de arredondamento.
      var_dump(round(12.4)); // quando o valor decimal é até 4, arredonda apara baixo (retorna 12)
      var_dump(round(12.8)); // quando o valor decimal é acima de 4 arredonda para cima. (retorna 13)

      var_dump(round(12.61, 2)); // aqui indicamos a precisa de casas decimais após a virgula

      var_dump(round(12.6189, 2)); // arredonda para cima mantendo duas casas decimais
      var_dump(round(12.6129, 2)); // arredonda para baixo mantendo duas casa decimais


      var_dump(ceil(12.1)); // arredonda sempre para cima
      var_dump(floor(12.9)); // arredonda sempre para baixo

      var_dump(mt_rand(1, 60)); // -> é melhor que rand(), performa melhor. Recebe dois parâmetros para definir o número randomico.

      var_dump(pow(3,2)); // calcula a potência
      var_dump(3**2); // 3 elevado a 2

      var_dump(sqrt(9)); // retorna número inteiro
      var_dump(sqrt(10)); // retorna um número quebrado

      
?>