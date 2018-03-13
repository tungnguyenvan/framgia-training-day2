<?php
  include_once 'abstractDongVat.php';
  include_once 'IAction.php';

  class Ca extends DongVat implements IAction{
    var $long = "vàng";
    var $chan = 0;

  public function chay(){
    return "Máy bay chạy để lấy đà bay lên";
  }
  public function bay(){
    return "Máy bay có thể bay";
  }
  public function boi(){}
  public function an(){}

  }
?>
