<?php
 require "produto.php";
  $produto = new Produto (10, "Feijão", "KG",10);
  $produto -> entrada (5):
  $produto -> saida (2);
 $json = json_encode($produto ->toArray(),JSON_PRETTY_PRINT);
 file_put_contents("estoque.json",$json);
 echo $json;
