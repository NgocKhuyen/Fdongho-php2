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
            <th class="w-5">Ẩn hiện</th>
            <th class="w-5">Trạng thái</th>
            <th class="w-10">Tính năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = ($pageNum - 1) * $pageSize + 1;
                foreach($listSP as $sp) { ?>
                    <tr class="align-items-center">
                        <td><span><?=$stt++?></span></td>
                        <td><img src="<?=$sp['hinh']?> " style="width: 50px; height: 35px" alt="No image"></td>
                        <td> <?=$sp['ten_sp']?> </td>
                        <td> <?=$this->model->layTenLoai($sp['id_loai'])?> </td>
                        <td> <?=$sp['gia']?> </td>
                        <td> <?=$sp['gia_km']?> </td>
                        <td> <?=$sp['ngay']?> </td>
                        <td> <?=$sp['anhien']==1?'Đang hiện' : 'Đang ẩn'?> </td>
                        <td> <?=$sp['hot']==1?'Nổi bật':'Bình thường'?> </td>
                        <td>
                            <button class="btn btn-outline-warning p-1"><a href="<?=ROOT_URL."admin/editsp?id=".$sp['id_sp']; ?>" class="nav-link">Sửa</a></button>
                            <button class="btn btn-outline-danger p-1"><a href="<?=ROOT_URL."admin/deletesp?id=".$sp['id_sp']; ?>" class="nav-link" onclick="return confirm('Tiếp tục xóa')">Xóa</a></button>
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
                            <a class="page-link" href="<?=ROOT_URL."admin/sp?page=$pagePrev"; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        <?php }
                    ?>
                </li>
                            
                <?php
                    $start = max(1, $pageNum - 2);
                    $end = min($tongSoTrang, $pageNum + 2);
                    for($i = $start; $i <= $end; $i++) { ?>
                        <li class="page-item <?=($i == $pageNum) ? 'active' : '' ?>">
                            <a class="page-link" href='<?=ROOT_URL."admin/sp?page=$i"?>'><?=$i?></a>
                        </li>
                    <?php }
                ?>
                
                <!-- Next -->
                <li class="page-item">
                    <?php 
                        if($pageNext < $tongSoTrang) { ?>
                            <a class="page-link" href="<?=ROOT_URL."admin/sp?page=$pageNext"; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php }
                    ?>
                </li>
            </ul>
        </nav>
    </div>                
</div>