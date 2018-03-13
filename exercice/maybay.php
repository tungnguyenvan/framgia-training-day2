<?php
  require_once 'abstractMayMoc.php';
  require_once 'IAction.php';

  class MayBay extends MayMoc implements IAction {
    var $tenmay = "Máy bay Boeing";
    var $cannang = "430Kg";

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
