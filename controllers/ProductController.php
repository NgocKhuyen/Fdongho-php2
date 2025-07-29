<?php
    require_once "./models/product.php";
    require_once "./models/category.php";

    class ProductController {
        private $model = null;
        private $modelC = null;
        function __construct() {
            $this->model = new product();
            $this->modelC = new category();
        }

        function index() {
            $product_seller = $this->model->product_bestseller();
            $product_new = $this->model->product_new();
            $product_male = $this->model->product_male();
            $product_female = $this->model->product_female();
            $_SESSION['category'] = $this->modelC->category_name();
            // echo "<pre>";
            // print_r($product_male);
            // echo "</pre>";
            $title_page = "Trang chủ";
            $view = "pages/home.php";
            include "views/layout.php";
        }
        function category() {
            $title_page = "Trang sản phẩm";
            $view = "pages/product.php";
            include "views/layout.php";
        }
        function product() {
            $title_page = "Trang sản phẩm";
            $view = "pages/product.php";
            include "views/layout.php";
        }
        function detail() {
            global $params;
            $slug = $params['slug'];
            $detail = $this->model->product_detail($slug);
            $product_related = $this->model->product_related($detail['category_id']);
            // echo "<pre>";
            // print_r($product_related);
            // echo "</pre>";
            $title_page = $detail['name'];
            $view = "pages/detail.php";
            include "views/layout.php";
        }
       
    }
?>