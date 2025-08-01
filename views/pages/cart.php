<main>
    <div class="container-fluid bg-infor mb-3">
        <div class="container ps-0">
            <div class="d-flex align-items-center text-dark fw-semibold p-3 m-0">
                <p class="m-0">Trang chủ</p>    
                <i class="bi bi-caret-right-fill ms-2 me-2 title"></i>
                <p class="title m-0">Giỏ hàng</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Start Tóm tắt đơn hàng -->
            <div class="col-12 col-md-8 me-3 mb-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <input type="checkbox" class="me-2">
                        <label for="">Chọn tất cả (<?=$product_count?> sản phẩm)</label>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-trash3-fill me-1"></i>
                        <a href="<?=ROOT_URL."delcart?action=clean"?>" class="m-0 nav-link text-danger">Xóa</a>
                    </div>
                </div><hr class="mt-2 border-1 title">
        
                <?php
                    $total = 0;
                    $sum_qty = 0;
                    foreach($_SESSION['cart'] as $id => $qty) : ?>
                        <?php 
                            $product = $this->model->cart_product($id);
                            // echo "<pre>";
                            // print_r($product);
                            // echo "</pre>";
                            $price = ($product['price'] * (1 - ($product['sale'] / 100))) * $qty;
                            $total += $price;
                            $sum_qty += $qty;
                        ?>

                        <div class="container p-0">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <input type="checkbox" class="me-2" />
                                <img src="<?=PUBLIC_URL?>/image/<?=$product['img']?>" width="60" height="60" alt="">
                                <div class="">
                                    <h5><?=$product['name']?></h5>
                                </div>
                                <p class="m-0 title fw-semibold"><?=number_format($price, 0, ',', '.')?>₫</p>
                                <span class="me-2 sl text-center"><?=$qty?></span>
                                <a href="<?=ROOT_URL."delcart?action=delitem&id=".$product['id']?>" class="nav-link">
                                    <i class="bi bi-x fs-4"></i>
                                </a>
                            </div>
                            <hr class="mt-2 border-1">
                        </div>
                    <?php endforeach;
                ?>
                
            </div>
            <!-- Start Tóm tắt đơn hàng -->

            <!-- Start Thông tin đơn hàng -->
            <div class="col-12 col-md-3 bg-body-secondary mb-3 h-50">
                <h4 class="mt-2 mb-4 fw-semibold">Thông tin đơn hàng</h4>
                <div class="d-flex justify-content-between fw-medium">
                    <p class="m-0">Tạm tính (<?=$sum_qty?> sản phẩm)</p>
                    <p class="title"><?=number_format($total, 0, ',', '.')?>₫</p>
                </div>
                <div class="d-flex justify-content-between mb-3 fw-medium">
                    <p class="m-0">Tổng cộng</p>
                    <p class="title"><?=number_format($total, 0, ',', '.')?>₫</p>
                </div>
                <a href="<?=ROOT_URL."thanhtoan"?>" class="d-flex justify-content-center align-items-center nav-link btn-chec mb-3 w-100">Mua hàng</a>
            </div>
            <!-- End Thông tin đơn hàng -->
        </div>
    </div>
</main>