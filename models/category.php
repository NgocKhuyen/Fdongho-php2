<?php
    require_once "database.php";
    class category extends database{

        function category_name() {
            $sql = "SELECT name, slug FROM categories";
            return $this->query($sql);
        }
    }

?>