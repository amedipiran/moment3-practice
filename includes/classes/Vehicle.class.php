<?php
class Vehicle {
    //Properties
    public $manufacturer;
    public $modell;
    public $year;

    //Method
    function __construct(string $manufacturer, string $modell, int $year) {

        $this->manufacturer = $manufacturer;
        $this->modell = $modell;
        $this->year = $year;
    }
    public function getInfo() : string{
        return "Tillverkare: " . $this->manufacturer ."<br>" . " Modell:". $this->modell . "<br>" . "Årsmodell: ". $this->year. ".";  
    }
     
}
$vehicle1 = new Vehicle("Ford", "Mustang GT", 1966);

?>