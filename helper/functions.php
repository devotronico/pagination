<?php



function _view(string $dataType, array $files=[], array $data=[]) {
  extract($data);
  ob_start(); // catturiamo tutto nel buffer
  foreach ( $files as $file ) {require 'app/views/'.$file.'.tpl.php';}// i post andranno in questo file di template
  $template = ob_get_contents(); // nella variabile viene immagazzionato tutto il template catturato
  ob_end_clean(); // liberiamo la memoria | meglio disattivare altrimenti non ritorna $data
  return $template;
}

