<?php

  function inverse($x){
    if (!$x) {
      throw new Exception ('division by zero');
    }
    return 1/$x;
  }

  try{
    echo inverse(0) . "<br/>";
    echo inverse(5) . "<br/>";
  }catch(Exception $e){
    echo "caught exception: ". $e->getMessage() . "<br/>";
  }finally{
    echo "Đây là final <br/>";
  }

  class MyException extends Exception{}

  class test{
    public function testing(){
      try{
          try{
            throw new MyException('foo!');
          }catch(Exception $e){
            throw $e;
          }
      }catch(Exception $e){
        var_dump($e->getMessage());
      }
    }
  }
  $foo = new test;
  $foo->testing();


  echo "<br/>hello world<br/>";
 ?>
