<?php
 class Produto{
   public $codProd; 
   public $nome;
   public $unid;
   public $saldoEstoque;
 }
public function __construct($codProd,$nome,$unid,$saldoEstoque){
  $this -> codProd = $codprod;
  $this -> nome = $nome;
  $this -> unid = $unid; 
  $this -> saldoEstoque = $saldoestoque

public function entrada ($quantidade){
   $this -> saldoEstoque += $quantidade;
}
public function saida ($quantidade){
  if ($quantidade <= $this -> saldoEstoque){
     $this -> saldoEstoque -= $quantidade;
  }
  else{
    echo "Saldo Insuficiente! ";
  }

 public class Array (){
  return [
   "CodProd" = > $this -> $codprod,
  ]
  }
