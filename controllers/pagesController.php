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
        $c = new Contacts();

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);
            $msg = addslashes($_POST['msg']);

            if($c->insertContact($name, $email, $phone, $msg)){
                $dados['msg'] = "Embreve retornaremos o seu contato, obrigado :D";
            }
        }

        $this->loadTemplate('contact', $dados);
    }
}