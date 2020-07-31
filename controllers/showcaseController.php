<?php
class showcaseController extends Controller {
    public function index(){
        $dados = array();

        

        $this->loadTemplate('showcase', $dados);
    }
}