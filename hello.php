<?php
namespace MyProject;
use MyProject\Hello\SayHello;

class MyProject{
    public function __construct(){
        $hello = new SayHello();
        $hello->sayHello('Peter');
    }


}

require_once 'vendor/autoload.php';

new MyProject();
