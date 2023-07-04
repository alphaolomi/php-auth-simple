<?php

$file = new SplFileObject("animals.csv");

$file->setFlags(SplFileObject::READ_CSV);
// $file->setCsvControl('|');

foreach ($file as $row) {
    // list($animal, $class, $legs) = $row;
    [$animal, $class, $legs] = $row;
    printf("A %s is a %s with %d legs\n", $animal, $class, $legs);
}
