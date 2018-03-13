<?php

  include 'abstractAnimal.php';

  class Chicken extends Animal{
      var $hair = "Đen";
      public function move(){
        echo  "di chuyển bằng 2 chân";
      }
  }

  $chicken = new Chicken();
  $chicken->move();
  echo $chicken->reproduction();
  echo $chicken->hair;

?>
