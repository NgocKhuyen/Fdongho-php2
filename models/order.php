<?php
    require_once "database.php";

    class order extends database {
        function order_list() {
            $sql = "SELECT COUNT(id) AS count_order FROM `order`";
            $row = $this->query($sql);
            return $row[0]['count_order'];
        }

    } // Class order
?>