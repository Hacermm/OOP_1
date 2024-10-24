<?php

namespace App\Counter;

class Counter {

    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

}