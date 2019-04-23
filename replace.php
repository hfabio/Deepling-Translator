<?php
function translate($input){
  $deepling = array('TO', 'T',  '°', '~', '-', 'L', '(', ')', '|', '>', 'C', 'W', '<', '8', '"', "B", '^', 'X', 'V', '\\', '=');
  $human   = array( 'HO', 'AA', '!', 'S', 'E', 'T', 'L', 'D', 'I', 'V', 'U', 'M', 'C', 'G', 'N', 'R', 'A', 'K', 'B', 'Y', 'F');

  return str_replace($deepling, $human, $input);

}

function toEnglish($input){
  $deepling = array('FIEJAAI');
  $english = array('sunlight');
  //array_unshift();  adiciona elemento no inicio do array
  //array_push();  adiciona elemento no fim do array
  //array_push($deepling, '');array_push($english, '');  exemplo de como usar
  array_push($deepling, 'FIEJAAI');array_push($english, 'sunlight');
  array_push($deepling, 'HONGOU');array_push($english, 'mirror');
  array_push($deepling, 'TOKJAALI');array_push($english, 'ship');
  array_push($deepling, 'GOUTAANA');array_push($english, 'humanity');
  array_push($deepling, 'BOJAA');array_push($english, 'blight');
  array_push($deepling, 'SUMJAAKAA');array_push($english, 'brothers-in-arms');
  array_push($deepling, 'DOJAA');array_push($english, 'wipe');
  array_push($deepling, 'JAAI');array_push($english, 'my');
  array_push($deepling, 'KRUM');array_push($english, 'will');
  array_push($deepling, 'SOLESTEAA');array_push($english, 'Smile');
  array_push($deepling, 'GOUTAAN');array_push($english, 'surface');
  array_push($deepling, 'DIVIDEJ');array_push($english, 'peace');
  array_push($deepling, 'QJELL');array_push($english, 'Qjell');
  array_push($deepling, 'AFAR');array_push($english, 'watch');
  array_push($deepling, 'GOU');array_push($english, 'over');
  array_push($deepling, 'JEY');array_push($english, 'us');
  array_push($deepling, 'JAUL');array_push($english, 'Jaul');
  array_push($deepling, 'JAA');array_push($english, 'I');
  array_push($deepling, 'BAJAR');array_push($english, 'return');
  array_push($deepling, 'NJAI');array_push($english, 'together');
  array_push($deepling, 'QUKAA');array_push($english, 'prevail');
  array_push($deepling, 'MOTOMAA');array_push($english, 'travel');
  array_push($deepling, 'NAI');array_push($english, 'their');
  array_push($deepling, 'HO');array_push($english, 'from');
  array_push($deepling, 'JEAA');array_push($english, 'the');
  array_push($deepling, 'ILI');array_push($english, 'sea');
  array_push($deepling, 'JIAA');array_push($english, 'there');
  array_push($deepling, 'RO');array_push($english, 'not');
  array_push($deepling, 'UM');array_push($english, 'in');

  return str_replace($deepling, $english, $input);
}

 ?>
