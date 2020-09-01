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

        $l = new Leads();

        if(isset($_POST['lead_2']) && !empty($_POST['lead_2'])){
            $lead = addslashes($_POST['lead_2']);
            
            if($l->addLeads($lead, 2)){
                $dados['msg'] = "success";
            }
        }
        
        $this->loadTemplate('about', $dados);
    }

    public function news(){
        $dados = array();

        $l - new Leads();

        if(isset($_POST['lead_2']) && !empty($_POST['lead_2'])){
            $lead = addslashes($_POST['lead_2']);
            
            if($l->addLeads($lead, 2)){
                $dados['msg'] = "success";
            }
        }

        $this->loadTemplate('news', $dados);
    }

    public function categories(){
        $dados = array();

        $a = new Admin();
        $l = new Leads();

        if(isset($_POST['lead_2']) && !empty($_POST['lead_2'])){
            $lead = addslashes($_POST['lead_2']);
            
            if($l->addLeads($lead, 2)){
                $dados['msg'] = "success";
            }
        }

        $dados['listCat'] = $a->listCategories();

        $this->loadTemplate('categoriesBlocks', $dados);
    }

    public function contact(){
        $dados = array();
        $c = new Contacts();
        $l = new Leads();

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);
            $msg = addslashes($_POST['msg']);

            if(isset($_POST['lead_2']) && !empty($_POST['lead_2'])){
                $lead = addslashes($_POST['lead_2']);
                
                if($l->addLeads($lead, 2)){
                    $dados['msg'] = "success";
                }
            }

            if($c->insertContact($name, $email, $phone, $msg)){
                $dados['msg'] = "Embreve retornaremos o seu contato, obrigado :D";
            }
        }

        $this->loadTemplate('contact', $dados);
    }
}