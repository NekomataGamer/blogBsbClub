<?php
class adminController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function login(){
        $dados = array();
        $a = new Admin();

        if(isset($_POST['login']) && !empty($_POST['login'])){
            $login = addslashes($_POST['login']);
            $pass = $_POST['pass'];

            if($a->login($login, $pass)){
                header("Location: ".BASE_URL."admin");
            }else{
                $dados['login_error'] = "O login e/ou a senha estão errados";
            }
        }

        $this->loadView('loginAdm', $dados);
    }

    public function logout(){
        unset($_SESSION['login_adm_bsb']);
        header("Location: ".BASE_URL."admin");
    }

    public function index() {
        $dados = array();

        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){

        }else{
            header("Location: ".BASE_URL."admin/login");
        }
        
        $this->loadTemplateAdm('dashboard', $dados);
    }

    // POSTS

    public function insertPost(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            $dados['listCategories'] = $a->listCategories();
            
            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                $category = addslashes($_POST['category']);
                $body = addslashes($_POST['body']);
                $althor_name = addslashes($_POST['althor_name']);

                if($a->insertPost($title, $category, $body, $althor_name)){
                    $dados['msg'] = "Post Adicionado!";
                }
            }


            $this->loadView('insertPost', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listPost(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            $dados['listPost'] = $a->listPost();

            $this->loadTemplateAdm('listPost', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    // Categorias
    public function insertCategory(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                if($a->insertNewCat($title)){
                    $dados['msg'] = "Categoria Adicionada!";
                }
            }

            $this->loadTemplateAdm('insertCategory', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listCategories(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            $dados['listcategories'] = $a->listCategories();

            $this->loadTemplateAdm('listCategories', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

}