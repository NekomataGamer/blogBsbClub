<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $a = new Admin();
        
        $dados['listPostFeatured'] = $a->getFeaturedsPosts();

        $dados['listCategories'] = $a->listCategories();

        $this->loadTemplate('home', $dados);
    }

    public function adm(){
        $dados = [];
        $this->loadTemplateAdm('home', $dados);
    }

}