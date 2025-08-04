<?php
    require_once "./models/product.php";

    Class AdminProductController {
        private $model = null;
        function __construct() {
            $this->model = new product();
        }

        function index() {
            // echo "<pre>";
            // print_r($total_product);
            // echo "</pre>";
            $title_page = "Danh sách sản phẩm";
            $view = "product_list.php";
            include_once "views/admin/layout.php";
        }
    }

?>