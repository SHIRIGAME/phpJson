<?php
 class Produto{
   public $codProd; 
   public $nome;
   public $unid;
   public $saldoEstoque;
 
public function __construct($codProd,$nome,$unid,$saldoEstoque){
  $this -> codProd = $codProd;
  $this -> nome = $nome;
  $this -> unid = $unid; 
  $this -> saldoEstoque = $saldoEstoque;
}
   
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
}

 public function toArray (){
  return [
   "codProd" =>$this->codProd,
   "nome" =>$this->nome,
   "unid" =>$this->unid,
   "saldoEstoque" =>$this->saldoEstoque
  ];
  }
