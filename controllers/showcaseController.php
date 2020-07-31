<?php
class showcaseController extends controller {
    public function index(){
        $dados = array();

        

        $this->loadTemplate('showcase', $dados);
    }
}