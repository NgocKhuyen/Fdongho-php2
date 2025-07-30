<main>
    <div class="container-fluid bg-infor mb-3">
        <div class="container ps-0">
            <div class="d-flex align-items-center text-dark fw-semibold p-3 m-0">
                <p class="m-0">Trang chủ</p>    
                <i class="bi bi-caret-right-fill ms-2 me-2 title"></i>
                <p class="title m-0">Chi tiết sản phẩm</p>
            </div>
        </div>
    </div>

    
    <div class="container mt-4 mb-5">
        <div class="row">
            <!-- Start danh mục sản phẩm  -->       
            <div class="col-md-6 d-flex justify-content-center">
                <img src="<?=PUBLIC_URL?>/image/<?=$detail['img']?>" alt="" class="mx-auto">
            </div>
            <!-- End danh mục sản phẩm  -->
            <!-- Start Chi tiết sản phẩm  -->
            <div class="col-md-6">
                <h4 class="fw-bold mb-2"><?=$detail['name']?></h4>
                <div class="mb-4">
                    <span>Số lượng: <?=$detail['sold']?> |</span>
                    <span>Lượt xem: <?=$detail['view']?> |</span>
                    <div class="d-inline">
                        <?php
                            for ($i = 1; $i <= floor($detail['rating']); $i++) : ?>
                                <i class="bi bi-star-fill text-warning me-2"></i>
                            <?php endfor;
                            
                            for ($i = 1; $i <= floor(5 - floor($detail['rating'])); $i++) : ?>
                                <i class="bi bi-star me-2"></i>
                            <?php endfor;
                        ?>
                    </div>
                    <span>(1 đánh giá)</span>
                </div>
                <h5 class="title mb-4 fw-semibold"><?=number_format($detail['price'] * $detail['sale'], 0, ',', '.')?>₫</h5>
                <p class="mb-4">
                    <?=$detail['description']?>
                </p>

                <div class="d-flex mb-3">
                    <input type="number" class="soluong fs-5 text-center me-3 p-2" value="1" min="1" max="<?=$detail['quantity']?>">
                    
                    <a href="<?=ROOT_URL."addtocart&id=".$detail['id']."&soluong=1"?>" class="d-flex align-items-center add-cart nav-link p-2 me-3 w-25">
                        <i class="bi bi-cart-plus fs-4 me-2"></i>
                        Thêm vào giỏ
                    </a>

                    <button type="button" class="d-flex align-items-center justify-content-center add-cart p-2 me-3 w-25 ">
                        Mua ngay
                    </button>
                </div>

                <div>
                    <p class="fw-semibold mb-2">Thương hiệu: <?=$detail['brand']?></p>
                    <p class="fw-semibold" >Danh mục: <?=$detail['category_name']?></p>
                </div>
            </div>
            <!-- End Chi tiết sản phẩm  -->
        </div>
    </div>

    <!-- Start Form bình luận  -->
    <div class="container border border-3 p-2 mb-5">
        <h5 class="title text-uppercase mb-2">Bình luận</h5><hr class="mt-0 border-2 title">
        <form action="" class="d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
            <div class="form-floating w-100 me-2">
                <textarea class="form-control" placeholder="Viết bình luận" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Viết bình luận</label>
            </div>
            <button class="btn add-cart rounded">Gửi</button>
        </form>
    </div>
    <!-- End Form bình luận  -->

    <!-- Start Sản phẩm Liên quan -->
    <div class="container mb-3">
        <h3 class="title text-uppercase mb-2">Sản phẩm Liên quan</h3><hr class="mt-0 border-3 title">
        <div class="row">
            <?php
                foreach($product_related as $product) : ?>
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
    <!-- End Sản phẩm Liên quan -->

</main>