<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Area;

class AreaController extends Controller
{

    public function index()
    {
        $dados["view"] = "formas";
        $this->load("template", $dados);
    }

    public function calcula(){

        $objArea = new Area();
        $area = null;
        $formula = null;
        $figura = $_POST["figura"];
        $base=$_POST["base"];
        $altura=$_POST["altura"];
        $raio=$_POST["raio"];

        if($figura=="quadrado"){
            $area = $objArea->quadrado($base);
            $formula = "base x base";
        }elseif($figura=="circulo"){
            $area = $objArea->circulo($raio);
            $formula = "pi * raio * raio";
        }elseif($figura=="retangulo"){
            $area = $objArea->retangulo($base,$altura);
            $formula = "base x altura";
        }elseif($figura=="triangulo"){
            $area = $objArea->triangulo($base,$altura);
            $formula = "(base x altura)/2";
        }else{
            $area = 0;
        }


        $dados["figura"] = $figura;
        $dados["base"] = $base;
        $dados["altura"] = $altura;
        $dados["raio"] = $raio;
        $dados["area"] = $area;
        $dados["formula"] = $formula;

    
        $dados["view"] = "formas";
        $this->load("template", $dados);

    }

}