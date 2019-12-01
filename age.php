<?php

Class Age {
    public $dateOfBirth;
    public $today;
    public $age;

    public function __construct($dob) {
        $this->dateOfBirth = new DateTime($dob); 
        $this->today = new DateTime('today');  
    }

    public function ageCalculation() {
        $this->age =  $this->dateOfBirth->diff($this->today);
    }
}


?>