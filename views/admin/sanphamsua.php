<div class="container bg-white shadow p-2 mb-3 rounded-2">
    <h4 class="mb-0">Sửa sản phẩm</h4>
</div>
<div class="container bg-white rounded-2">
    <form id="frmsuasp" action="<?=ROOT_URL?>admin/editsp_" method="post" enctype="multipart/form-data" class="mt-3">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="" class="form-label">Tên Sản Phẩm</label>
                <input type="text" name="ten_sp" class="form-control" value="<?=$sp['ten_sp']?>">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Ngày</label>
                <input type="date" name="ngay" class="form-control" value="<?=$sp['ngay']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="" class="form-label">Giá</label>
                <input type="number" name="gia" class="form-control" value="<?=$sp['gia']?>" >
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Giá khuyến mãi</label>
                <input type="number" name="giakm" class="form-control" value="<?=$sp['gia_km']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 form-check">
                <label for="" class="form-label mb-2">Ẩn hiện</label>
                <div class="d-flex ms-3">
                    <div class="me-3">
                        <input type="radio" name="anhien" class="form-check-input"  <?=$sp['anhien']==0 ? "checked":""?> value="0">
                        <label for="" class="form-check-label">Ẩn</label>
                    </div>
                    <div class="ms-3">
                        <input type="radio" name="anhien" class="form-check-input" value="1" <?=$sp['anhien']==1 ? "checked":""?>>
                        <label for="" class="form-check-label">Hiện</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 form-check">
                <label for="" class="form-label mb-2">Nổi bật</label>
                <div class="d-flex ms-3">
                    <div class="me-3">
                        <input type="radio" name="hot" value="0" class="form-check-input" <?=$sp['hot']==0? "checked":""?>>
                        <label for="" class="form-check-label">Bình thường</label>
                    </div>
                    <div class="ms-3">
                        <input type="radio" name="hot" value="1" class="form-check-input" <?=$sp['hot']==1? "checked":""?>>
                        <label for="" class="form-check-label">Nổi bật</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="form-label">Mô tả</label>
            <textarea name="mota" id="" class="form-control ms-2" rows="3"><?=$sp['mota']?></textarea>
        </div>
        <div class="row mb-3">
            <label for="" class="form-label">Hình</label>
            <input type="file" name="hinh"><br><i><?=$sp['hinh']?></i>
        </div>
        <div class="row mb-3 d-flex Justify-conten-center">
            <input type="hidden" name="id_sp" value="<?=$sp['id_sp']?>">
            <button class="btn btn-outline-primary w-25" type="submit">Sửa sản phẩm</button>
        </div>
    </form>
</div>
