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

        function check_user($email, $pass) {
            $sql = "SELECT * FROM users WHERE email =:em";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":em", $email, PDO::PARAM_STR);
            $stmt->execute();
            $recordnum = $stmt->rowCount();
            if($recordnum != 1) {
                return ['emailErr' => "Email không tồn tại"];
            } 
            $user = $stmt->fetch();
            $pass_hash = $user['password'];
            if(password_verify($pass, $pass_hash) == false) {
                return ['passErr' => "Mật khẩu không đúng"];
            } else {
                return $user;
            }

        }
    } // class user