<?php 
use App\Chelik;

require_once('../vendor/autoload.php');

use App\Worker;

echo 'a' . '<br>';

$worker = new Worker('бебе', 5, [44, 5, 6]);

$worker->work();

$chel = new Chelik('новый челик');










