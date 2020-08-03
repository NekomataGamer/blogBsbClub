<?php
class showcaseController extends Controller {
    public function index($id){
        $dados = array();

        $a = new Admin();

        $dados['dataPost'] = $a->getPostData($id);
        $dados['getCategory'] = $a->getDadosFromCategory($dados['dataPost']['id_category']);
        $dados['imagesPost'] = $a->getImagesByProductId($id);

        $this->loadTemplate('showcase', $dados);
    }
}