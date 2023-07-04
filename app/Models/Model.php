<?php

class Model 
{
    private $pdo;
    public function __construct(Pdo $pdo = null) {
        $this->pdo = $pdo;
    }
}