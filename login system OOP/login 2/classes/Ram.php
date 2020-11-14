<?php


class Ram{

//prop
public $memory = 0;


//method

public function add()
{
  $this->memory += 256;
  return $this;
}

public function clear()
{
  $this->memory = 0;
}



}