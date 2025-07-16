<?php
    class ProductController {
        function index() {
            $title_page = "Trang chủ";
            $view = "pages/home.php";
            include "views/layout.php";
        }
        function product() {
            echo "<h1>Trang danh sách sản phẩm</h1>";
        }
        function detail() {
            echo "<h1>Trang chi tiết sản phẩm</h1>";
        }
        function category() {
            echo "<h1>Trang sản phẩm trong loại</h1>";
        }
        function searchForm() {
            echo "<h1>Form tìm kiếm</h1>";
        }
        function searchResult() {
            echo "<h1>Kết quả tìm kiếm tìm kiếm</h1>";
        }
    }