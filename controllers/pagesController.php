<?php
class pagesController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    // public function index() {
    //     $dados = array();
        
    //     $this->loadView('', $dados);
    // }

    public function about(){
        $dados = array();
        
        $this->loadTemplate('about', $dados);
    }

    public function news(){
        $dados = array();

        $this->loadTemplate('news', $dados);
    }

    public function categories(){
        $dados = array();

        $this->loadTemplate('categories', $dados);
    }

    public function contact(){
        $dados = array();

        $this->loadTemplate('contact', $dados);
    }
}