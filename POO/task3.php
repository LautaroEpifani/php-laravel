<?php

class MyClass {
  public static function say_hello_world() {
    echo "Hello World";
  }
}

$my_class = new MyClass();

$my_class::say_hello_world();