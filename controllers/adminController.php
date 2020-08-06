<?php
class adminController extends Controller {

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
                $description = addslashes($_POST['description']);
                $category = addslashes($_POST['category']);
                $body = addslashes($_POST['body']);
                $althor_name = addslashes($_POST['althor_name']);
                $link = addslashes($_POST['link']);
                $featured = addslashes($_POST['featured']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $map = addslashes($_POST['map']);

                $discount = addslashes($_POST['discount']);

                $images = (!empty($_FILES['images']))?$_FILES['images']:array();

                $idPost = $a->insertPost($title, $category, $body, $description, $althor_name, $link, $featured, $email, $phone, $map, $images, $discount);
                if($idPost){
                    header('Location: '.BASE_URL."admin/editPost/".$idPost."/?status=success");
                }
            }


            $this->loadTemplateAdm('insertPost', $dados);
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

    public function editPost($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                $description = addslashes($_POST['description']);
                $category = addslashes($_POST['category']);
                $body = addslashes($_POST['body']);
                $author = addslashes($_POST['author_name']);
                $link = addslashes($_POST['link']);
                $featured = addslashes($_POST['featured']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $map = addslashes($_POST['map']);

                $discount = addslashes($_POST['discount']);

                $images = (!empty($_FILES['images']))?$_FILES['images']:array();
                
                if($a->editPost($title, $category, $body, $author, $link, $featured, $email, $phone, $map, $images, $discount, $id)){
                    $dados['msg'] = "Post Editado"; 
                }
            }

            $dados['dataPost'] = $a->getPostData($id);
            $dados['listCategories'] = $a->listCategories();

            $this->loadTemplateAdm('editPost', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function deletePost($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if($a->deletePost($id)){
                header('Location: '.BASE_URL.'admin/listPost/?status=success');
            }else{
                header('Location: '.BASE_URL.'admin/listPost/?status=error');
            }
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
                $icon = (!empty($_FILES['icon']))?$_FILES['icon']:array();
                if($a->insertNewCat($title, $icon)){
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

    public function editCategory($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);

                if($a->editCategory($title, $id)){
                    $dados['msg'] = "Categoria Editada"; 
                }
            }

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                
                if($a->editCategory($title, $id)){
                    $dados['msg'] = "Categoria editada";
                }
            }

            $dados['dataCategory'] = $a->getDadosFromCategory($id);

            $this->loadTemplateAdm('editCategory', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function deleteCategory($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if($a->deleteCategory($id)){
                header('Location: '.BASE_URL.'admin/listCategories/?status=success');
            }else{
                header('Location: '.BASE_URL.'admin/listCategories/?status=error');
            }
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function delImages($url){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if($a->deleteImages($url)){
                // header('Location: '.BASE_URL.'admin/editPost/'.$id);
            }else{
                // header('Location: '.BASE_URL.'admin/listCategories/?status=error');
            }
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    // Leads

    public function listLeads(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $l = new Leads();
            
            $dados['listLeads'] = $l->getListLeads();

            $this->loadTemplateAdm('listLeads', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contactLead($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $a = new Admin();
            $l = new Leads();
            
            $l->updateStatus($id, 1);

            header("Location: ".BASE_URL."admin/listLeads/");
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listLeadsListen(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $l = new Leads();
            
            $dados['listLeads'] = $l->getListLeadsListen();

            $this->loadTemplateAdm('listLeadsListen', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contacts(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Contacts();
            
            $dados['listContacts'] = $c->getNewContacts();

            $this->loadTemplateAdm('contacts', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contactView($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Contacts();
            
            $dados['contactData'] = $c->getDataFromContact($id);

            $this->loadTemplateAdm('contactsView', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function readContact($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $a = new Admin();
            $c = new Contacts();

            if($c->readContact($id)){
                $dados['msg'] = "Marcado como lido";
            }
            
            header("Location: ".BASE_URL."admin/contactView/".$id);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contactsRead(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Contacts();

            $dados['listReadContacts'] = $c->getListReadContacts();

            $this->loadTemplateAdm('contactsRead', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function comments(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Comments();

            $dados['commentList'] = $c->getListOfComments();

            $this->loadTemplateAdm('comments', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editComment($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Comments();

            $dados['commentData'] = $c->getCommentsFromPostId($id);

            $this->loadTemplateAdm('editComment', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }
}