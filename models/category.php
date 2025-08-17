<?php
    require_once "database.php";
    class category extends database{

        function category_name() {
            $sql = "SELECT name, slug FROM categories";
            return $this->query($sql);
        }

        function count_category() {
            $sql = "SELECT COUNT(id) AS count FROM categories";
            $row = $this->query_one($sql);
            return $row['count'];
        }

        function category_list($pageNum, $page_size) {
            $start = ($pageNum - 1) * $page_size;
            $sql = "SELECT * FROM categories ORDER BY updated_at DESC LIMIT $start, $page_size";
            return $this->query($sql);
        }
    }

?>