<?php 


class Fruit{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function intro(){
        echo "The fruit is name $this->name and the color is $this->color";
    }

}

class Strawberry extends Fruit {
    function message(){
        echo "Am i a fruit or a berry <br>";
    }
}

$strawberry = new Strawberry("Strawberry","red");
$strawberry->message();
$strawberry->intro();


?>