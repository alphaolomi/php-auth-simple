<?php

$fileName = 'data.txt';
$info = new SplFileInfo($fileName);

if ($info->isFile()) {
    echo $info->getRealPath() . "\n";
}

?>