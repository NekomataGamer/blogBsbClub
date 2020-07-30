<?php
class showcaseController extends controller {
    public function showcase(){
        $dados = array();

        

        $this->loadTemplate('showcase', $dados);
    }
}