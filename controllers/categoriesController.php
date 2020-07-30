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

        $this->loadTemplate('categories', $dados);
    }
}