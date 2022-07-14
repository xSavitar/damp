<?php

class Foo {
    public $var = '3.14159265359';
}

$baseMemory = memory_get_usage();

for ( $i = 0; $i <= 100000; $i++ ) {
    $a = new Foo();
    $a->self = $a;
}

echo memory_get_peak_usage(), "\n";
