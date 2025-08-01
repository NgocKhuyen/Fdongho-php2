<?php
    require_once "database.php";
    class user extends database {
        function save_user($name, $email, $pass) {
            $sql = "INSERT INTO users (name, email, password)
                    VALUES(:na, :em, :pa)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":na", $name, PDO::PARAM_STR);
            $stmt->bindParam(":em", $email, PDO::PARAM_STR);
            $stmt->bindParam(":pa", $pass, PDO::PARAM_STR);
            $stmt->execute();
        }
    } // class user