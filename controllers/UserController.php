<?php
    require_once "./models/user.php";
    class UserController {
        private $model = null;
        function __construct() {
            $this->model = new user();
        }

        function register() {
            $title_page = "Đăng kí thành viên";
            $view = "pages/register.php";
            include "views/layout.php";
        }

        function register_() {
            $nameErr = $emailErr = $passErr  = $pass_confirmErr = '';
            $name = trim(strip_tags($_POST['name']));
            $email = trim(strip_tags($_POST['email']));
            $pass = trim(strip_tags($_POST['pass']));
            $pass_confirm = trim(strip_tags($_POST['pass_confirm']));
            if (empty($name)) {
                $nameErr = "Họ tên không được bỏ trống";
            } 
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Email không hợp lệ";
            }
            if (empty($pass)) {
                $passErr = "Mật khẩu không được bỏ trống";
            } else if(strlen($pass) < 8) {
                $passErr = "Mật khẩu ít nhất 8 kí tự";
            }

            if ($pass_confirm !== $pass) {
                $pass_confirmErr = "Mật khẩu xác nhận không khớp";
            }

            if(!empty($nameErr) || !empty($emailErr) || !empty($passErr) || !empty($pass_confirmErr)) {
                $_SESSION['errors'] = [
                    'name' => $nameErr,
                    'email' => $emailErr,
                    'pass' => $passErr,
                    'pass_confirm' => $pass_confirmErr,
                ];
                $_SESSION['old'] = [
                    'name' => $name,
                    'email' => $email
                ];
                header("Location: ".ROOT_URL."dangki");
            }

            $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
            $this->model->save_user($name, $email, $pass_hash);
            unset($_SESSION['errorrs'], $_SESSION['old']);
            $_SESSION['success'] = "Đăng kí tài khoản thành công";
            header("Location: ".ROOT_URL."dangnhap");
        }
        
        function login() {
            $title_page = "Đăng nhập";
            $view = "pages/login.php";
            include "views/layout.php";
        }

        function login_() {
            $email = trim(strip_tags($_POST['email']));
            $pass = trim(strip_tags($_POST['pass']));
            $result = $this->model->check_user($email, $pass);
            if (isset($result['emailErr']) || isset($result['passErr'])) {
                $_SESSION['login_errors'] = $result;
                $_SESSION['old_email'] = $email;
                header("Location: " . ROOT_URL . "dangnhap");
                exit;
            }
            
            $_SESSION['id_user'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            header("Location: ".ROOT_URL);
        }

        function logout() {
            unset($_SESSION['id_user'],  $_SESSION['name'], $_SESSION['old_email']);
            header("Location: ".ROOT_URL);
        }
    }