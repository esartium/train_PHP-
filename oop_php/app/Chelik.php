<?php

namespace App;

class Chelik extends Worker
{
    public string $def;  //описание челика

    public function __construct($def) {
        $this->def = $def;
        echo $def . '<br>';
    }
}

