<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Projeto fundamentos</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Treinaweb</a>
    </nav>

    <div class="container">
        <div class="py-5 my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome do curso</th>
                        <th scope="col" class="text-center">Carga Horária</th>
                        <th scope="col" class="text-center">Versão da ferramenta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach (cursos() as $curso): 

                        if(!$curso['status'])
                            continue;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $curso['nome_curso'];?></th>
                        <td class="text-center"><?php echo carga_horaria($curso['carga_horaria']);?></td>
                        <td class="text-center"><?php echo $curso['versao_ferramenta'];?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>