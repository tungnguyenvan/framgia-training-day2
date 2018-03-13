<?php
  include 'abstractDongVat.php';
  include 'IAction.php';

  class Chim extends DongVat implements IAction{
    var $long = "trắng";
    var $chan = 2;

  public function chay(){
    return "chim có thể đi và chạy bằng 2 chân";
  }
  public function bay(){
    return "chim có thể bay được";
  }
  public function boi(){}
  public function an(){
    return "chim có thể ăn sâu và thức ăn của chim";
  }
  }
?>
