<?php
 class MyClass {
     public function __construct(...$args)
     {
         var_dump($args);

     }
 }
 $hello = new MyClass('args', 'args2')
?>