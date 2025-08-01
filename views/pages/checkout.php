    <main>
        <div class="container-fluid bg-infor mb-3">
            <div class="container ps-0">
                <div class="d-flex align-items-center text-dark fw-semibold p-3 m-0">
                    <p class="m-0">Trang chủ</p>    
                    <i class="bi bi-caret-right-fill ms-2 me-2 title"></i>
                    <p class="title m-0">Thanh toán</p>
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <form action="thanhtoan_" method="post">
                <div class="row">
                    <!-- Start Form thông tin nhận hàng -->
                    <div class="col-md-6">
                        <div class="mt-3">
                            <div class="d-flex">
                                <i class="bi bi-geo-alt-fill title me-2"></i>
                                <h5 class="title text-uppercase mb-2">Địa chỉ nhận hàng</h5>
                            </div>
                            <hr class="mt-0 border-3 title">
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="" class="form-label">Họ và tên<small class="text-danger">*</small></label>
                                <input type="text" name="name" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Số điện thoại<small class="text-danger">*</small></label>
                                <input type="text" name="phone" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Địa chỉ<small class="text-danger">*</small></label>
                                <input type="text" name="address" class="form-control form-control-sm">
                            </div>
                            
                            <div class="mb-3">
                                <label for="" class="form-label">Ghi chú<small class="text-danger">*</small></label>
                                <textarea name="description" id="ghi-chu" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- End Form thông tin nhận hàng -->

                    <!-- Start Form đơn hàng -->
                    <div class="col-md-6 mb-3">
                        <div class="mt-3">
                            <h5 class="title text-uppercase mb-2">Đơn hàng của bạn</h5>
                            <hr class="mt-0 border-3 title">
                        </div>
                        <div class="container p-0">
                            <div class="container">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">HÌNH</th>
                                            <th scope="col">SẢN PHẨM</th>
                                            <th scope="col">TỔNG</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                            $total = 0;
                                            $sum_qty = 0;
                                            foreach($_SESSION['cart'] as $id_sp => $qty) : ?>
                                                <?php 
                                                    $product = $this->model->cart_product($id_sp);
                                                    $price = ($product['price'] * (1 - ($product['sale']/100)) * $qty);
                                                    $total += $price;
                                                    $sum_qty += $qty;
                                                ?>
                                                <tr>
                                                    <td><img src="<?=PUBLIC_URL?>/image/<?=$product['img']?>" width="30" height="30" alt=""></td>
                                                    <td><?=$product['name']?></td>
                                                    <td><?=number_format($price, 0, ',', '.')?>đ</td>
                                                </tr>
                                            <?php endforeach;
                                        ?>
                                        <tr>
                                            <td class="fw-bold">TỔNG(<?=$sum_qty?>)</td>
                                            <td class="fw-bold text-end" colspan="2"><?=number_format($total, 0, ',', '.')?>đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex align-items-center mt-4 mb-3">
                                    <input type="text" class="form-control w-25" placeholder="Mã giảm giá">
                                    <button class="btn btn-outline-dark ms-2">ÁP DỤNG</button>
                                </div>
                                <div class="mb-4">
                                    <h5 class="mb-2">Phương thức thanh toán</h5>
                                    <div class="d-flex mb-2">
                                        <img src="<?=PUBLIC_URL?>/image/tt1.png" width="30" height="30" alt="">
                                        <p class="m-0 ms-1 me-2">Thanh toán khi nhận hàng</p>
                                        <input type="radio" name="payment" value="1" checked>
                                    </div>
                                    <div class="d-flex">
                                        <img src="<?=PUBLIC_URL?>/image/tt2.jpg" width="30" height="30" alt="">
                                        <p class="m-0 ms-1 me-2">Chuyển khoản ngân hàng</p>
                                        <input type="radio" name="payment" value="0">
                                    </div>
                                </div>
                                <button type="submit" class="thanhtoan w-100">ĐẶT HÀNG</button>
                            </div>
                            
                        </div>
                    </div>
                <!-- End Form đơn hàng -->
                </div>
            </form>
        </div>
    </main>