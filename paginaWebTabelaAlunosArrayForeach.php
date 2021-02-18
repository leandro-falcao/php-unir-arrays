<!DOCTYPE html>
<html lang="pt-br">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>criando tabela com nome e nota dos alunos</title>
   </head>

   <body>
      <h1>tabela aluno e nota usando o foreach</h1>

      <?php
         $Alunos_notas = ['Leandro' => 9.5, 'Bernado' => 8, 'Carmen' => 8.5, 'Joao' => 7, 'Maria' => 6.4];

         foreach ($Alunos_notas as $aluno => $nota) {
            print "$aluno: $nota. \n <br>";
         }

      ?>

   </body>

</html>
