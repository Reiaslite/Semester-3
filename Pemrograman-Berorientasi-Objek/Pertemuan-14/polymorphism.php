<?php

// Pembuatan Interface
interface Machine{
    public function calcTask();
}

//Pembuatan class dengan implements machine
class Circle implements Machine {
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calcTask()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Rectangle implements Machine{
    private $width, $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function calcTask()
    {
        return $this->width * $this->height;
    }
}

$taskCircle = new Circle(1);
print_r ($taskCircle). PHP_EOL;
echo "</br>";
echo "Hasil Perhitungan Circle : ".$taskCircle->calcTask().PHP_EOL;
echo "</br>";

$taskRectangle = new Rectangle(4, 2);
print_r($taskRectangle). PHP_EOL;
echo "</br>";
echo "Hasil Perhitungan Rectangle : ".$taskRectangle->calcTask().PHP_EOL;
echo "</br>";

?>