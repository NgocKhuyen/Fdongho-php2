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

        function save_checkout($name, $phone, $address, $description, $payment) {
            $sql = "INSERT INTO `order` (name, phone, address, description, payment)
                    VALUES (:na, :ph, :ad, :de, :pa)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":na", $name, PDO::PARAM_STR);
            $stmt->bindParam(":ph", $phone, PDO::PARAM_STR);
            $stmt->bindParam(":ad", $address, PDO::PARAM_STR);
            $stmt->bindParam(":de", $description, PDO::PARAM_STR);
            $stmt->bindParam(":pa", $payment, PDO::PARAM_STR);
            $stmt->execute();
            $id_ch = $this->conn->lastInsertId();
            return $id_ch;
        }

        function save_order($id_ch) {
            foreach($_SESSION['cart'] as $id_pr => $qty) {
                $product = $this->cart_product($id_pr);
                $price = $product['price'] * (1 - ($product['sale']/100));
                $sql = "INSERT INTO order_detail (id_order, id_product, name, quantity, price)
                        VALUES(:or, :pr, :na, :qu, :pi)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":or", $id_ch, PDO::PARAM_INT);
                $stmt->bindParam(":pr", $id_pr, PDO::PARAM_INT);
                $stmt->bindParam(":na", $product['name'], PDO::PARAM_STR);
                $stmt->bindParam(":qu", $qty, PDO::PARAM_INT);
                $stmt->bindParam(":pi", $price, PDO::PARAM_INT);
                $stmt->execute(); 
            }
        }

        function total_product() {
            $sql = "SELECT COUNT(*) AS count_product FROM products";
            $row = $this->query($sql);
            return $row[0]['count_product'];
        }

        function product_hot() {
            $sql = "SELECT COUNT(*) AS count_product FROM products WHERE hot = 1";
            $row = $this->query($sql);
            return $row[0]['count_product'];
        }


        function product_list($number_page, $page_size = 10) {
            $start = ($number_page - 1) * $page_size;
            $sql = "SELECT p.*, c.name AS name_category FROM products p INNER JOIN categories c ON c.id = p.category_id ORDER BY p.id DESC LIMIT $start, $page_size";
            return $this->query($sql);
        }
    } // class product

?>