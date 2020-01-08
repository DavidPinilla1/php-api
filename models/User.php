<?php
class User
{
    protected $name;
    public static $id;
    public function __construct($name)
    {
        $this->name=$name;
        $this::$id++;
    }
    public function __toString()
    {
        return 'El nombre es: '.$this->name;
    }
    public function getName(){
        return $this->name;
    }
}
$manolo=new User('manolo');
$jose=new User('Jose');
$joaquin=new User('Joaquín');
var_dump($manolo);
echo '<br/>';
var_dump($jose);
echo '<br/>';
echo User::$id;
echo '<br/>';
echo '<br/>';
echo $jose;
// echo $manolo->name;
echo Math::random_int();