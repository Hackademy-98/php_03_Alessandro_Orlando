<?php
//Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
// Automobile
// SUV
// Utilitaria
// Sportiva

// Definizione della classe Auto
class Auto {
    public $brand;
    public $model;
    public $door;
    public $price;

    // Costruttore della classe Auto
    public function __construct($brand, $model, $door, $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->door = $door;
        $this->price = $price;
    }
}

// Definizione della classe Suv che estende la classe Auto
class Suv extends Auto {
    public $awd;

    // Costruttore della classe Suv
    public function __construct($brand, $model, $door, $price, $awd) {
        parent::__construct($brand, $model, $door, $price);
        $this->awd = $awd;
    }
}

// Definizione della classe Utilitarie che estende la classe Auto
class Utilitarie extends Auto {
    public $dimension;

    // Costruttore della classe Utilitarie
    public function __construct($brand, $model, $door, $price, $dimension) {
        parent::__construct($brand, $model, $door, $price);
        $this->dimension = $dimension;
    }
}

// Definizione della classe Sportive che estende la classe Auto
class Sportive extends Auto {
    public $cv; 

    // Costruttore della classe Sportive
    public function __construct($brand, $model, $door, $price, $cv) {
        parent::__construct($brand, $model, $door, $price);
        $this->cv = $cv;
    }
}

// Creazione di oggetti Suv
$Suv = new Suv('Hyundai', 'iX35', '5', '25.000 €', 'Yes');
$Suv2 = new Suv('Alfa Romeo', 'Tonale Quadrifoglio', '5', '55.000 €', 'Yes');
$Suv3 = new Suv('Lamborghini', 'Urus', '5', ' 300.000 €', 'Yes');

// Creazione di oggetti Utilitarie
$Utilitarie = new Utilitarie('Fiat', 'Panda', '5', '15.500  €', '3.686x1.643x1.551 mm');
$Utilitarie2 = new Utilitarie('Hyundai', 'i10', '5', '13.000  €', '3.670x1.680x1.483 mm');
$Utilitarie3 = new Utilitarie('Kia', 'Picanto', '5', '12.500 €', '3.595x1.595x1.500 mm');

// Creazione di oggetti Sportive
$Sportive = new Sportive('Porsche', '718 Cayman', '3', '400.000 €', '500 CV');
$Sportive2 = new Sportive('Lamborghini', 'Countach', '3', '700.000', '800 CV');
$Sportive3 = new Sportive('BMW', 'M8 Competion', '3', '300.000 €', '625 CV');

// Stampa info oggetti creati
var_dump($Suv);
var_dump($Utilitarie);
var_dump($Sportive);


?>