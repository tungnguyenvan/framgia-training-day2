<?php
  include 'abstractDongVat.php';
  include 'IAction.php';

  class Cho extends DongVat implements IAction{
    var $long = "vàng";
    var $chan = 4;

  public function chay(){
    return "chó chạy bằng 4 chân";
  }
  public function bay(){}
  public function boi(){}
  public function an(){
    return "chó có thể ăn tất cả thức ăn mà con người có thể ăn";
  }
  }
?>
