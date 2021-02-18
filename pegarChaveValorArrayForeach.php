<?php
  $Alunos_notas = ['Leandro' => 9, 'Bernado' => 8.8, 'Carmen' => 7.2];
  
  foreach ($Alunos_notas as $aluno => $nota) {
    print "$aluno: $nota. \n ";
  }
  
  /* aqui onde o array que tem seus itens nomeados e não indice numerico devido a ter nome;
  e a função foreach vai primeiro chamar o array $Alunos_notas e o AS vai gerar duas variaveis do array,
  vai pegar a chave nomeada de cada aluno e o valor da nota, ou seja  chave/valor, key/value */
?>
