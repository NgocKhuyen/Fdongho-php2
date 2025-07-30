<main>
    <!-- Start Banner 1-->
    <div id="carouselExampleIndicators" class="carousel slide mb-3">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= PUBLIC_URL ?>/image/banner.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Banner 1-->

    <!-- Start Banner 2-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-6 col-md-6 bn-hov">
                <img src="<?= PUBLIC_URL ?>/image/banner.jpg" class="w-100 rounded " alt="">
            </div>
            <div class="col-6 col-md-6 bn-hov">
                <img src="<?= PUBLIC_URL ?>/image/banner.jpg" class="w-100 rounded " alt="">
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
    <!-- Start Sản phẩm bán chạy -->
    <div class="container mb-3">
        <h3 class="title text-uppercase mb-2">Sản phẩm bán chạy</h3><hr class="mt-0 border-3 title">
        <div class="row">
            <?php 
                foreach($product_seller as $product) : ?>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card text-center shadow nav-link">
                            <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card text-center nav-link">
                                <div class="img-hover img-thumbnail">
                                    <img src="<?= PUBLIC_URL ?>/image/<?=$product['img']?>" class="w-100" alt="">
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card-title nav-link fs-5 fw-semibold">
                                    <?=$product['name']?>
                                </a>
                                <h5 class="card-text fw-medium title"><?=number_format($product['price'], 0, ',', '.')?>₫</h5>
                            </div>
                            <a href="<?=ROOT_URL."addtocart?id=".$product['id'] . "&soluong=1"?>" class="d-flex align-items-center justify-content-center add-cart nav-link p-2">
                                <i class="bi bi-cart-plus fs-4 me-2"></i>
                                Thêm vào giỏ
                            </a>
                        </div>
                    </div>
                <?php endforeach; 
            ?>
        </div>
    </div>
    <!-- End Sản phẩm bán chạy -->

    <!-- Start Sản phẩm mới -->
    <div class="container mb-3">
        <h3 class="title text-uppercase mb-2">Sản phẩm Mới</h3><hr class="mt-0 border-3 title">
        <div class="row">
            <?php
                foreach($product_new as $product) : ?> 
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card text-center shadow nav-link">
                            <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card text-center nav-link">
                                <div class="img-hover img-thumbnail">
                                    <img src="<?= PUBLIC_URL ?>/image/<?=$product['img']?>" class="w-100" alt="">
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card-title nav-link fs-5 fw-semibold">
                                    <?=$product['name']?>
                                </a>
                                <h5 class="card-text fw-medium title"><?=number_format($product['price'], 0, ',', '.')?>₫</h5>
                            </div>
                            <a href="<?=ROOT_URL."addtocart?id=".$product['id'] . "&soluong=1"?>" class="d-flex align-items-center justify-content-center add-cart nav-link p-2">
                                <i class="bi bi-cart-plus fs-4 me-2"></i>
                                Thêm vào giỏ
                            </a>
                        </div>
                    </div>
                <?php endforeach;
            ?>
        </div>
    </div>
    <!-- End Sản phẩm mới -->

    <!-- Start Banner 3 -->
    <div class="container bn-hov mb-3">
        <img src="<?= PUBLIC_URL ?>/image/banner3.webp" class="w-100" alt="">
    </div>
    <!-- End Banner 3 -->

    <!-- Start Đồng hồ nam -->
    <div class="container mb-4">
        <h3 class="title text-uppercase mb-2">Đồng hồ nam</h3><hr class="mt-0 border-3 title">
        <div class="row">
            <?php
                foreach($product_male as $product) : ?> 
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card text-center shadow nav-link">
                            <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card text-center nav-link">
                                <div class="img-hover img-thumbnail">
                                    <img src="<?= PUBLIC_URL ?>/image/<?=$product['img']?>" class="w-100" alt="">
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card-title nav-link fs-5 fw-semibold">
                                    <?=$product['name']?>
                                </a>
                                <h5 class="card-text fw-medium title"><?=number_format($product['price'], 0, ',', '.')?>₫</h5>
                            </div>
                            <a href="<?=ROOT_URL."addtocart?id=".$product['id'] . "&soluong=1"?>" class="d-flex align-items-center justify-content-center add-cart nav-link p-2">
                                <i class="bi bi-cart-plus fs-4 me-2"></i>
                                Thêm vào giỏ
                            </a>
                        </div>
                    </div>
                <?php endforeach;
            ?>
        </div>
    </div>
    <!-- End Đồng hồ nam  -->
    
    <!-- Start Banner 4 -->
    <div class="container bn-hov mb-4">
        <img src="<?= PUBLIC_URL ?>/image/banner4.webp" class="w-100" alt="">
    </div>
    <!-- End Banner 4 -->

    <!-- Start Đồng hồ nữ  -->
    <div class="container mb-3">
        <h3 class="title text-uppercase mb-2">Đồng hồ nữ</h3><hr class="mt-0 border-3 title">
        <div class="row">
            <?php
                foreach($product_female as $product) : ?> 
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card text-center shadow nav-link">
                            <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card text-center nav-link">
                                <div class="img-hover img-thumbnail">
                                    <img src="<?= PUBLIC_URL ?>/image/<?=$product['img']?>" class="w-100" alt="">
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="<?=ROOT_URL."chitiet?slug=".$product['slug']?>" class="card-title nav-link fs-5 fw-semibold">
                                    <?=$product['name']?>
                                </a>
                                <h5 class="card-text fw-medium title"><?=number_format($product['price'], 0, ',', '.')?>₫</h5>
                            </div>
                            <a href="<?=ROOT_URL."addtocart?id=".$product['id'] . "&soluong=1"?>" class="d-flex align-items-center justify-content-center add-cart nav-link p-2">
                                <i class="bi bi-cart-plus fs-4 me-2"></i>
                                Thêm vào giỏ
                            </a>
                        </div>
                    </div>
                <?php endforeach;
            ?>
        </div>
    </div>
    <!-- End  Đồng hồ nữ -->

    <!-- Start Bài viết liên quan -->
    <div class="container mb-5">
        <h3 class="title text-uppercase mb-2">Bài viết liên quan</h3><hr class="mt-0 border-3 title">
        <div class="row">
            <div class="col-md-4">
                <a href="<?=ROOT_URL."tintuc?slug="?>" class="card nav-link">
                    <div class="card-body">
                        <p class="card-title">Đăng bởi: <small>Nguyễn Ngọc Khuyến</small> - <sm>31/10/2024</sm></p>
                        <h5 class="card-text fw-medium">Đồng hồ I&W Carnival của nước nào? Có tốt không? Mua ở đâu uy tín?</h5>
                    </div>
                    <div class="bn-hov">
                        <img src="https://bizweb.dktcdn.net/100/472/501/articles/dong-ho-nam-iw-carnival-735g1-chinh-hang-6.jpg?v=1685793326967" class="w-100" alt="">
                    </div>
                    
                </a>
            </div>
        </div>
    </div>
    <!-- End  Bài viết liên quan -->

</main> 