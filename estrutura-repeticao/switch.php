<?php

  $a = 2;

  switch ($a) {
    case(3):
      echo "O primeiro está correto";
      break;
    case(2):
      echo "O segundo está correto";
      break;
    
    default:
      echo "Nenhum esta correto";
      break;
  }

  $result = match($a){
    1 => "Variavel a é igual a 1",
    2, 3, 4 => "Variavel a é igual a 2",
    3 => "Variavel a é igual a 3",
    default => "Nenhum ta certo"
  };

  echo $result;

