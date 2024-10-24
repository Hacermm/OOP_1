<?php

declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../App/Counter/Counter.php';

use App\Counter\Counter;


Counter::increment();

echo "Current count: " . Counter::$count;

?>
