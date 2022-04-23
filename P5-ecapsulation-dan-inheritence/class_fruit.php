<?php 


class Fruit{
    // public $name;
    // protected $color;
    // private $weight;

    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }

     function set_color($n){
        $this->color = $n;
    }

    function set_weight($n){
        $this->weight = $n;
    }
}


// $mago = new Fruit();
// $mago->name     = 'Mago';
// $mago->color    = 'Yellow';
// $mago->weight   = '300';

$mago = new Fruit();
$mago->set_name('Mago');
$mago->set_color('Yellow');
$mago->set_weight('300');


?>