<?php
    require_once "database.php";
    class product extends database {
        function product_bestseller() {
            $sql = "SELECT * FROM products WHERE sold >= 8 ORDER BY id DESC LIMIT 4";
            return $this->query($sql);
        }

        function product_new() {
            $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 4";
            return $this->query($sql);
        }
        
        function product_male() {
            $sql = "SELECT * FROM products p 
                    INNER JOIN categories c ON p.category_id = c.id 
                    WHERE p.category_id = 1
                    ORDER BY p.id DESC 
                    LIMIT 4";
            return $this->query($sql);
        }

        function product_female() {
            $sql = "SELECT * FROM products p 
                    INNER JOIN categories c ON p.category_id = c.id 
                    WHERE p.category_id = 2
                    ORDER BY p.id DESC 
                    LIMIT 4";
            return $this->query($sql);
        }

        function product_detail($slug) {
            $sql = "SELECT p.*, c.name AS category_name FROM products p INNER JOIN categories c ON p.category_id = c.id WHERE p.slug = '$slug'";
            return $this->query_one($sql);
        }

        function product_related($category) {
            $sql = "SELECT * FROM products p INNER JOIN categories c ON  p.category_id = c.id WHERE p.category_id = $category ORDER BY p.id DESC LIMIT 4";
            return $this->query($sql);
        }
        
    } // class product

?>