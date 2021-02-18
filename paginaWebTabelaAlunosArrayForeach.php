<!DOCTYPE html>
<html lang="pt-br">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>criando tabela com nome e nota dos alunos</title>
   </head>

      <?php 
         $Alunos_notas = ['Leandro' => 9.5, 'Bernado' => 8, 'Carmen' => 8.5, 'Joao' => 7, 'Maria' => 6.4];
      ?>
    

   <body>
      <h1>tabela aluno e nota usando o foreach</h1>

      <table>
         
         <thead>
            <th>nome</th>
            <th>nota</th>
         </thead>

         <tbody>
            
            <?php
               $Alunos_notas = ['Leandro' => 9.5, 'Bernado' => 8, 'Carmen' => 8.5, 'Joao' => 7, 'Maria' => 6.4]; 
               foreach ($Alunos_notas as $aluno => $nota):
            ?>   
         
            
            <?php /* vamos eslaçar o aluno e depois sua nota em cada td via php */ ?>
            <tr>

               <td><?php print $aluno ?></td>
               <td><?php print $nota ?></td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>


   </body>

</html>

   <?php
      // atualizar a cada 30 segundos
       header('Refresh:30');
   ?>
