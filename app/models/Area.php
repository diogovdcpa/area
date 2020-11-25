<?php

namespace app\models;

use app\core\Model;

class Area
{

    public function quadrado($lado)
    {
        return $lado * $lado;
    }

    public function circulo($raio)
    {
        return pi() * $raio * $raio;
    }

    public function retangulo($base,$altura)
    {
        return $base * $altura;
    }

    public function triangulo($base,$altura)
    {
        return ($base * $altura) /2;
    }
    
}
