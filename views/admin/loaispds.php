<div class="container bg-white shadow p-2 mb-3 rounded-2">
    <h4 class="mb-0">Danh sách loại sản phẩm</h4>
</div>
<div class="container bg-white rounded-2">
    <div class="d-flex align-items-center justify-content-between">
        <div class="mt-3">
            <a href="<?=ROOT_URL."admin/addloai"?>" class="badge text-bg-success p-3 nav-link"><i class="bi bi-plus-circle me-2"></i>Tạo mới loại</a>
        </div>
        <form class="mt-3 d-flex">
            <input class="form-control me-2" type="search" placeholder="Bạn tìm gì?" name="search">
            <button class="btn btn-outline-primary" type="submit">Tìm</button>
        </form>
       
    </div><hr>
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
            <th class="w-5">STT</th>
            <th class="w-40">Tên Loại</th>
            <th class="w-5">Thứ tự</th>
            <th class="w-25">Ẩn hiện</th>
            <th class="w-25">Tính năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = ($pageNum - 1) * $pageSize + 1;
                foreach($listLoaiSP as $loai) { ?>
                    <tr class="align-items-center text-center">
                        <td><span><?=$stt++?></span></td>
                        <td> <?=$loai['ten_loai']?> </td>
                        <td> <?=$loai['thutu']?> </td>
                        <td> <?=$loai['anhien']==1?'Đang hiện' : 'Đang ẩn'?> </td>
                        <td>
                            <button class="btn btn-outline-warning p-1"><a href="<?=ROOT_URL."admin/editloai?id=".$loai['id_loai']; ?>" class="nav-link">Sửa</a></button>
                            <button class="btn btn-outline-danger p-1"><a href="<?=ROOT_URL."admin/deleteloai?id=".$loai['id_loai']; ?>" class="nav-link" onclick="return confirm('Tiếp tục xóa')">Xóa</a></button>
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
                            <a class="page-link" href="<?=ROOT_URL."admin/loai?page=$pagePrev"; ?>" aria-label="Previous">
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
                            <a class="page-link" href='<?=ROOT_URL."admin/loai?page=$i"?>'><?=$i?></a>
                        </li>
                    <?php }
                ?>
                
                <!-- Next -->
                <li class="page-item">
                    <?php 
                        if($pageNext < $tongSoTrang) { ?>
                            <a class="page-link" href="<?=ROOT_URL."admin/loai?page=$pageNext"; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php }
                    ?>
                </li>
            </ul>
        </nav>
    </div>                
</div>