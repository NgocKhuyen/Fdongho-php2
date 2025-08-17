<?php
    require_once './models/product.php';
    require_once './models/order.php';
    require_once './models/user.php';

    Class AdminController {
        private $model = null;
        private $modelO = null;
        private $modelU = null;
        function __construct() {
            $this->model = new product();
            $this->modelO = new order();
            $this->modelU = new user();
        }

        function index() {
            $total_product = $this->model->total_product();
            $product_hot = $this->model->product_hot();
            $total_order = $this->modelO->order_list();
            $total_user = $this->modelU->user_list();
            // echo "<pre>";
            // print_r($total_user);
            // echo "</pre>";
            $title_page = "Tổng quan";
            $view = "home.php";
            include_once "views/admin/layout.php";
           
        }
    }

?>