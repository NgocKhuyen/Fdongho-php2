<div class="container bg-white shadow p-2 mb-3 rounded-2">
    <h4 class="mb-0">Danh sách sản phẩm</h4>
</div>
<div class="container bg-white rounded-2">
    <div class="d-flex align-items-center justify-content-between">
        <div class="mt-3">
            <a href="<?=ROOT_URL."admin/addsp"?>" class="badge text-bg-success p-3 nav-link"><i class="bi bi-plus-circle me-2"></i>Tạo mới sản phẩm</a>
        </div>
        <form class="mt-3 d-flex" action="" method="GET">
            <input class="form-control me-2" type="search" placeholder="Bạn tìm gì?" name="search">
            <button class="btn btn-outline-primary" type="submit">Tìm</button>
        </form>
        <!-- <div class="mt-2">
            <h4 class="mb-0">Sắp xếp</h4>
        </div> -->
    </div><hr>
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
            <th class="w-5">STT</th>
            <th class="w-10">Ảnh</th>
            <th class="w-25">Tên SP</th>
            <th class="w-10">Loại</th>
            <th class="w-10">Giá</th>
            <th class="w-10">Giá KM</th>
            <th class="w-10">Ngày</th>
            <th class="w-5 text-center">Đã bán</th>
            <th class="w-5">Trạng thái</th>
            <th class="w-10">Tính năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = ($pageNum - 1) * $page_size + 1;
                foreach($product_list as $product) { ?>
                    <tr class="align-items-center">
                        <td><span><?=$stt++?></span></td>
                        <!-- <td><span>1</span></td> -->
                        <td><img src="<?=PUBLIC_URL."/image/".$product['img']?> " style="width: 50px; height: 50px" alt="No image"></td>
                        <td> <?=$product['name']?> </td>
                        <td> <?=$product['name_category']?> </td>
                        <td> <?=$product['price']?> </td>
                        <td> <?=$product['price'] * (1 - ($product['sale'] / 100))?> </td>
                        <td> <?=date('d/m/Y',strtotime($product['created_at']))?> </td>
                        <td class="text-center"> <?=$product['sold']?> </td>
                        <td class="text-center"> <?=$product['hot'] == 1 ? 'Nổi bật':'Bình thường'?> </td>
                        <td>
                            <button class="btn btn-outline-warning p-1"><a href="<?=ROOT_URL."admin/editsp?id=".$product['id']; ?>" class="nav-link">Sửa</a></button>
                            <button class="btn btn-outline-danger p-1"><a href="<?=ROOT_URL."admin/deletesp?id=".$product['id']; ?>" class="nav-link" onclick="return confirm('Tiếp tục xóa')">Xóa</a></button>
                        </td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
    <!-- Phân trang -->
    <div class="row mt-5">
        <nav aria-label="Page navigation example mt-3">
            <ul class="pagination justify-content-center">
                <!-- Prev -->
                <li class="page-item">
                    <?php 
                        if($pagePrev >= 1) { ?>
                            <a class="page-link" href="<?=ROOT_URL."admin/sanpham?page=$pagePrev"; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        <?php }
                    ?>
                </li>
                            
                <?php
                    for($i = 1; $i <= $number_page; $i++) : ?> 
                        <li class="page-item"><a class="page-link" href="<?=ROOT_URL."admin/sanpham?page=".$i?>"><?=$i?></a></li>
                    <?php endfor;
                ?>
                
                <!-- Next -->
                <li class="page-item">
                    <?php 
                        if($pageNext < $number_page) { ?>
                            <a class="page-link" href="<?=ROOT_URL."admin/sanpham?page=$pageNext"; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php }
                    ?>
                </li>
            </ul>
        </nav>
    </div>                
</div>