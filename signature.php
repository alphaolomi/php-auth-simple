<?php

interface Signatural
{
  public function signature();
  public function verify(string $string);
}

trait HasSignature
{
    public function signature()
    {

    }
    public function verify(string $string)
    {
        
    }
}