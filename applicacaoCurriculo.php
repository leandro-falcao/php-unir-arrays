
<?php 
   $nome =  'leandro falcao';
   $profisao = 'programador ';
   $especialidade = 'programacao web front end';
   
   
   $contatos = ['email' => 'leandrofalcao@gmail.com', 
     'gihub' => 'github.com/leandro-falcao', 
      'linkedin' => 'linkedin.com/in/leandrofalcao'
   ];

   $formacao = [['inicio' => 2006, 
      'termino' => 2012,
      'instituicao' => 'unicsul',
      'ocupacao' => 'tecnologo'], 
      ['inicio' => 2012, 
      'termino' => false,
      'instituicao' => 'cruzeiro',
      'ocupacao' => 'curso']];

   $experiencia = [['inicio' => 2013, 
      'termino' => FALSE,
      'instituicao' => 'estagioX',
      'ocupacao' => 'estagio'],
      ['inicio' => 2014,
      'termino' => 2015,
      'instituicao' => 'udele-udemy',
      'ocupacao' => 'programacao web']
   ];

   $portifolio = [
      ['titulo' => 'rodada de desenvolvimento',
      'foto' => 'foto-desenvolvimento.jpg',
      'ano' => 2013 ],
      ['titulo' => 'banco de dados e desenvolvimento',
      'foto' => 'foto-banco-dados.jpg',
      'ano' => 2016]
   ];

   $habilidade = ['html' => 100,
      'css' => 100,
      'php' => 60,
      'javascript' => 50,
      'python' => 20];
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> <?= $nome ?> </title>
</head>
   <body>
      <h1> <?= $nome ?> </h1>      
      <p> <?= $profisao .' --- ' .$especialidade ?> </p>
   </body>
</html>
