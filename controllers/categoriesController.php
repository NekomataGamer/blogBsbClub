<?php
class categoriesController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index($id_category) {
        $dados = array();

        $a = new Admin();

        $dados['listPost'] = $a->listPost($id_category);
        if(empty($dados['listPost'])){
            $dados['msg'] = "Ainda não existe nada nesta categoria";
        }

        $this->loadTemplate('categories', $dados);
    }
}