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

        function product() {
            global $params;
            $pageNum = isset($params['page']) == true ? $params['page'] : 1;
            $category_name = $this->modelC->category_name();
            if(isset($params['slug']) && !empty($params['slug'])) {
                $slug = $params['slug'];
                $page_size = 15;
                $count_product = $this->model->count_product_category($slug); // 48
                $number_page = ceil($count_product/$page_size); // 3
                $product_page = $this->model->product_category($slug, $pageNum, $page_size);
                // echo "<pre>";
                // print_r($count_product);
                // echo "</pre>";
            } else {
                $page_size = 15;
                $count_product = $this->model->count_product(); // 48
                $number_page = ceil($count_product/$page_size); // 3
                $product_page = $this->model->product_page($pageNum, $page_size);
            }
            // echo "<pre>";
            // print_r($count_product_category);
            // echo "</pre>";
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

        function showcart() {
            if(!isset($_SESSION['cart'])|| count($_SESSION['cart']) == 0) {
                $title_page = "Giỏ hàng trống";
                $view = "pages/showcart_empty.php";
                include "views/layout.php";
            } else {
                $title_page = "Giỏ hàng";
                $view = "pages/cart.php";
                include "views/layout.php";
            }

        }

        function addtocart() {
            global $params;
            $id_sp = $params['id'];
            $qty = (int) $params['soluong'];
            if(isset($_SESSION['cart'][$id_sp])) {
                $qty = $_SESSION['cart'][$id_sp] + $qty;
            }
            $_SESSION['cart'][$id_sp] = $qty;
            header("Location: ".ROOT_URL."showcart");
        }
    }
?>