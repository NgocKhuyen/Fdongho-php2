<?php
    require_once './config.php';
    class database {
        protected $conn = null;

        function __construct() {
            try {
                $str = "mysql:host=" .DB_HOST. "; dbname=" .DB_NAME. "; charset=utf8; port=3306";
                $this->conn = new PDO($str, DB_USER, DB_PASS);
            }
            catch(PDOException $e) {
                die("Lỗi kết nối db: " .$e->getMessage());
            }
        }

        function query($sql) { // Lấy list decord
            try {
                $result = $this->conn->query($sql);
                return $result->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(Exception $e) {
                die("Lỗi truy vấn data: " .$e->getMessage()."<br>".$sql);
            }
        }
        function query_one($sql) { // Lấy 1 decord
            try {
                $result = $this->conn->query($sql);
                return $result->fetch();
            } 
            catch(Exception $e) {
                die("Lỗi lấy decord: " .$e->getMessage()."<br>".$sql);
            }
        }
    } // Class database

?>
