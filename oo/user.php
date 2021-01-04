<?php
class People {
    public function eat(){
        echo 'eating','<br>';
    }
}
 class User extends People{
    public  $name = "no one";
    public function sayHello(){
        echo "hello, ".$this->name, '<br>';
    }
 }
 $user = new User();
echo $user->name, '<br>';
$user->sayHello();
$user->eat();
?>