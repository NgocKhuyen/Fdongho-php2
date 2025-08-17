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
            <th class="w-5">Hình</th>
            <th class="w-40">Tên Loại</th>
            <th class="w-5">Thứ tự</th>
            <th class="w-25">Tính năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = ($pageNum - 1) * $page_size + 1;
                foreach($category_list as $category) { ?>
                    <tr class="align-items-center text-center">
                        <td><span><?=$stt++?></span></td>
                        <td> <img src="<?=PUBLIC_URL."/image/".$category['img']?>" width="50" height="50"  alt=""> </td>
                        <td class="text-center"> <?=$category['name']?> </td>
                        <td> <?=$category['ordinal']?> </td>
                        <td>
                            <button class="btn btn-outline-warning p-1"><a href="<?=ROOT_URL."admin/editloai?id=".$category['id']; ?>" class="nav-link">Sửa</a></button>
                            <button class="btn btn-outline-danger p-1"><a href="<?=ROOT_URL."admin/deleteloai?id=".$category['id']; ?>" class="nav-link" onclick="return confirm('Tiếp tục xóa')">Xóa</a></button>
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