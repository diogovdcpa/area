<?php
namespace app\controllers;
use app\core\Controller;

class AreaController extends Controller{
    
   public function index(){
       $dados['view']="formas";
       $this->load("template",$dados);
   } 
}
