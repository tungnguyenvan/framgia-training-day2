<?php
  require_once 'abstractMayMoc.php';
  require_once 'IAction.php';

  class Xe extends MayMoc implements IAction{
    var $tenmay = "xe lambo";
    var $cannang = "100kg";

  public function chay(){
    return "tốc độ đạt 100 km/h trong 3s";
  }
  public function bay(){}
  public function boi(){}
  public function an(){}
  }

 ?>
