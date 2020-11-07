<?php

class Libro{

private $nombre;
private $val_libro;


    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }



/**
 * Get the value of nombre
 */ 
public function getNombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setNombre($nombre)
{
$this->nombre = $nombre;
return $this;
}

/**
 * Get the value of val_libro
 */ 
public function getVal_libro()
{
return $this->val_libro;
}

/**
 * Set the value of val_libro
 *
 * @return  self
 */ 
public function setVal_libro($val_libro)
{
$this->val_libro = $val_libro;

return $this;
}
}

?>