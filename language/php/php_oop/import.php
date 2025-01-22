<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
// use tidak bisa mengimport nama class yang sama
// use Data\Two\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();

helpMe();

echo APPLICATION . PHP_EOL;