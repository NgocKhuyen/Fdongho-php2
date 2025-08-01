<?php
    session_start();
    require_once 'config.php';
    spl_autoload_register(function($class) {
        require "controllers/". $class .".php";
    });
    $baseDir = "/dongho/";

    $router = [ 
        'get' => [
            '' => [new ProductController, 'index'],
            'loai' => [new ProductController, 'product'],
            'sanpham' => [new ProductController, 'product'],
            'chitiet' => [new ProductController, 'detail'],
            'addtocart' => [new ProductController, 'addtocart'],
            'showcart' => [new ProductController, 'showcart'],
            'delcart' => [new ProductController, 'delcart'],
            'thanhtoan' => [new ProductController, 'checkout'],
            'trangthai' => [new ProductController, 'payment_success'],
            'dangki' => [new UserController, 'register'],
            'dangnhap' => [new UserController, 'login'],
        ],
        'post' => [
            'thanhtoan_'  => [new ProductController, 'checkout_'],
            'dangki_'  => [new UserController, 'register_'],
            'dangnhap_' => [new UserController, 'login_'],
        ]
    ];

    
   
    // http://localhost:3000/dongho/loai?id=2&page=1
    $path = substr($_SERVER['REQUEST_URI'], strlen($baseDir)); // loai?id=2&page=1
    $arr = explode('?', $path); // ['Loai', 'id=2&page=1']
    $route = strtolower($arr[0]); // 'Loai'
    if(count($arr) >= 2) parse_str($arr[1], $params);  // [id => 2, page => 1]
    else $params = [];
    $method = strtolower($_SERVER['REQUEST_METHOD']); // get | post
    if(!array_key_exists($method, $router)) die("Method không phù hợp: ". $method);
    if(!array_key_exists($route, $router[$method])) die("Route không tồn tại: ". $route);
    $action = $router[$method][$route]; // [0 => SanPhamController, 1 => index]
    // var_export($action);
    call_user_func($action);

?>