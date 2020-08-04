<?php
class homeController extends Controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $a = new Admin();
        $l = new Leads();

        if(isset($_POST['lead_1']) && !empty($_POST['lead_1'])){
            $lead = addslashes($_POST['lead_1']);
            
            if($l->addLeads($lead)){
                $dados['msg'] = "success";
            }
        }
        
        $dados['listPostFeatured'] = $a->getFeaturedsPosts();

        $dados['listCategories'] = $a->listCategories();

        $this->loadTemplate('home', $dados);
    }

    public function adm(){
        $dados = [];
        $this->loadTemplateAdm('home', $dados);
    }

}