<?php

namespace App;

class Worker 
{
    public string $name;
    public int $age;
    public array $hours;

    public function __construct($name, $age, $hours) {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
        echo $name . '/' . $age . '/' . '<br>';
        print_r($hours);
    }

    public function work() {
        echo 'мяу' . '<br>';
    }
    
}



