<?php 
  // codigo feito no padrão mais antigo u pouco
  $pessoa = array('altura' => 1.72, 
            'peso' => 87, 
            'nome' => 'leandro'
         );
  
  //sintaxe já mais moderna e comum as demais linguagens
  $cores = ['azul', 
        'roxo', 
        'amarelo', 
        'favorito' => 'preto'
      ];

    //unir cores dentro do array pessoa
    $pessoa['cores_blusa'] = $cores;

   // mostrar as cores dentro do array pessoa, e um array de array
   print $pessoa['cores_blusa']['favorito']

?>
