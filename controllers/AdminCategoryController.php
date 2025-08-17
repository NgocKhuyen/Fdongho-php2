<?php
    require_once './models/category.php';
    class AdminCategoryController {
        private $model = null;
        function __construct() {
            $this->model = new category();
        }

        function index() {
            global $params;
            $pageNum = isset($params['page']) == true ? $params['page'] : 1;
            $page_size = 10;
            $pagePrev = $pageNum - 1; $pageNext = $pageNum + 1;
            $count_category = $this->model->count_category();
            $number_page = ceil($count_category/$page_size);
            $category_list = $this->model->category_list($pageNum, $page_size);
            // echo "<pre>";
            // print_r($category_list);
            // echo "</pre>";
            $title_page = "Danh mục sản phẩm";
            $view = "category_list.php";
            include_once "views/admin/layout.php";
        }
    }


?>