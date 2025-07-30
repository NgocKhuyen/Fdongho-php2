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
            $sql = "SELECT p.* FROM products p 
                    INNER JOIN categories c ON p.category_id = c.id 
                    WHERE p.category_id = 1
                    ORDER BY p.id DESC 
                    LIMIT 4";
            return $this->query($sql);
        }

        function product_female() {
            $sql = "SELECT p.* FROM products p 
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
            $sql = "SELECT p.* FROM products p INNER JOIN categories c ON  p.category_id = c.id WHERE p.category_id = $category ORDER BY p.id DESC LIMIT 4";
            return $this->query($sql);
        }

        function count_product() {
            $sql = "SELECT COUNT(id) AS count FROM products";
            $row = $this->query_one($sql);
            return $row['count'];
        }
        
        function product_page($number_page, $page_size = 12) {
            $start = ($number_page - 1) * $page_size;
            $sql = "SELECT * FROM products ORDER BY updated_at DESC LIMIT $start, $page_size";
            return $this->query($sql);
        }

        function count_product_category($slug) {
            $sql = "SELECT COUNT(p.id) AS count_category FROM products p 
                    INNER JOIN categories c ON p.category_id = c.id
                    WHERE c.slug = '$slug'";
            $row = $this->query($sql);
            return $row[0]['count_category'];
        }

        function product_category($slug, $number_page, $page_size = 12) {
            $start = ($number_page - 1) * $page_size;
            $sql = "SELECT p.* FROM products p 
                    INNER JOIN categories c ON p.category_id = c.id
                    WHERE c.slug = '$slug'
                    ORDER BY p.id DESC
                    LIMIT $start, $page_size";
            return $this->query($sql);
        }

        function cart_product($id) {
            $sql = "SELECT * FROM products WHERE id = $id";
            return $this->query_one($sql);
        }
    } // class product

?>