<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_page?></title>
    <link rel="stylesheet" href="<?=PUBLIC_URL?>/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <main class="mt-2" >
        <div class="container">
            <div class="row p-0">
                <h4 class="text-center mb-3 mt-3 p-3 bg-primary text-white marquee-text">
                    <span>Chào mừng bạn đến với trang quản trị</span>
                </h4>
            </div>
            <div class="row">
                <div class="col-md-2 bg-primary h-auto">
                    <div class="text-center mt-3 mb-3">
                        <img src="https://png.pngtree.com/png-clipart/20210608/ourlarge/pngtree-dark-gray-simple-avatar-png-image_3418404.jpg" class="rounded" style="width:80px; height:70px;" alt="No imagge">
                        <p class="text-center fw-bold m-0 mt-2"><?=isset($_SESSION['hoten']) ? $_SESSION['hoten'] : "Nguyễn Ngọc Khuyến"; ?></p>
                        <p class="text-center text-body-secondary  m-0">Chào mừng bạn trở lại</p>
                    </div>
                    <nav class="text-center">
                        <ul class="nav text-center">
                            <li class="nav-item d-flex align-items-center ms-2">
                                <i class="bi bi-speedometer2 fs-6 text-light"></i>
                                <a href="<?=ROOT_URL."admin"?>" class="nav-link fs-6 text-light ">Trang chủ</a>
                            </li>
                            <li class="nav-item d-flex align-items-center ms-2">
                                <i class="bi bi-card-list fs-6 text-light"></i>
                                <a href="<?=ROOT_URL."admin/loai"?>" class="nav-link fs-6 text-light">Quản trị danh mục</a>
                            </li>
                            <li class="nav-item d-flex align-items-center ms-2">
                                <i class="bi bi-tag fs-6 text-light"></i>
                                <a href="<?=ROOT_URL."admin/sanpham"?>" class="nav-link fs-6 text-light">Quản trị sản phẩm</a>
                            </li>
                            <li class="nav-item d-flex align-items-center ms-2">
                                <i class="bi bi-bag fs-6 text-light"></i>
                                <a href="#" class="nav-link fs-6 text-light">Quản trị đơn hàng</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-10 bg-secondary-subtle">
                    <p class="text-end fw-medium p-3 m-0"><a href="<?=ROOT_URL."admin/logout"?>" class="nav-link">Thoát</a></p><hr class="m-0">
                    <div class="mb-3 mt-3"><?php include $view; ?></div>
                    <!-- <div class="text-bottom">
                        <p class="text-center p-3 h-auto">Phát triển bởi Nguyễn Ngọc Khuyến</p>
                    </div> -->
                </div>
            </div>
        </div>
    </main>
</body>
</html>