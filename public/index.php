<?php

require __DIR__ . "/../vendor/autoload.php";

use App\Classes\Lampe;

$lampe = new Lampe();
$lampe->allumer();
$lampe->interrupteur();
$lampe->interrupteur();
