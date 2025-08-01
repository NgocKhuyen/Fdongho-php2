<header>
    <div class="container-fluid bg-header border-bottom border-dark-subtle">
        <div class="container header-top">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="<?= PUBLIC_URL ?>/image/logo.png" width="150" height="100" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex m-auto w-50" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger bt-color" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
                            <li class="nav-item me-3">  
                                <a href="<?=ROOT_URL."showcart"?>" class="btn position-relative">
                                    <i class="bi bi-cart3 ic-color fs-4"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill ic-color badge text-white">
                                        <?php
                                            $count_qty = 0;
                                            if(isset($_SESSION['cart'])) {
                                                $count_qty = count($_SESSION['cart']);
                                                echo $count_qty;
                                            } else {
                                                echo 0;
                                            }
                                        ?>
                                        <span class="visually-hidden"></span>
                                    </span>
                                    
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link btn-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle text-white fs-4"></i>
                                </a> -->
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle text-white fs-4"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Đăng kí</a></li>
                                    <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="bi bi-person-circle text-white fs-4"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid bg-header p-2">
        <div class="container">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-white text-uppercase fw-medium" aria-current="page" href="<?=ROOT_URL?>">Trang chủ</a>
                </li>
                <li>
                    <a class="nav-link dropdown-toggle text-white text-uppercase fw-medium" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Danh mục</a>
                    <ul class="dropdown-menu">  
                        <?php
                            foreach($_SESSION['category'] as $category) : ?>
                                <li><a class="dropdown-item" href="<?=ROOT_URL."loai?slug=".$category['slug']?>"><?=$category['name']?></a></li>
                            <?php endforeach;
                        ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-uppercase fw-medium" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-uppercase fw-medium" href="#">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-uppercase fw-medium" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</header>