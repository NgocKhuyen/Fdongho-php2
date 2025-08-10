<?php
    require_once "./models/product.php";

    Class AdminProductController {
        private $model = null;
        function __construct() {
            $this->model = new product();
        }

        function index() {
            global $params;
            $pageNum = isset($params['page']) == true ? $params['page'] : 1;
            $page_size = 10;
            $pagePrev = $pageNum - 1; $pageNext =  $pageNum + 1;
            $count_product = $this->model->count_product(); // 48
            $number_page = ceil($count_product/$page_size); 
            $product_list = $this->model->product_list($pageNum, $page_size);
            // echo "<pre>";
            // print_r($product_list);
            // echo "</pre>";
            $title_page = "Danh sách sản phẩm";
            $view = "product_list.php";
            include_once "views/admin/layout.php";
        }
    }

?>