<?php
class productController extends controller {

    private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        header("Location: ".BASE_URL);
    }


    public function open($id) {
        $store = new Store();
        $products = new Products();
        $categories = new Categories();

        $dados = $store->getTemplateData();

        $info = $products->getProductInfo($id);

        if(count($info) > 0) {

            $dados['list'] = $products->getList();
            $dados['product_info'] = $info;
            $dados['product_images'] = $products->getImagesByProductId($id);
            $dados['product_options'] = $products->getOptionsByProductId($id);
            // $dados['product_rates'] = $products->getRates($id, 5);
            $dados['product_prepare'] = $products->getInfoProductPrepare($id);

            $this->loadView('product', $dados);
        } else {
            header("Location: ".BASE_URL);
        }


    }
























}