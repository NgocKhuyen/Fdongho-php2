<div class="container bg-white shadow p-2 mb-3 rounded-2">
    <h4 class="mb-0">Sửa loại sản phẩm</h4>
</div>
<div class="container bg-white rounded-2">
    <form id="frmsualoai" action="<?=ROOT_URL?>admin/editloai_" method="post" class="mt-3">
        <div class="row mb-3">
            <div class="mb-3">
                <label for="" class="form-label">Tên loại</label>
                <input type="text" name="ten_loai" class="form-control" value="<?=$loai['ten_loai']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Thứ tự</label>
                <input type="number" name="thutu" class="form-control" value="<?=$loai['thutu']?>">
            </div>
            <div class="mb-3 form-check">
                <label for="" class="form-label mb-2">Ẩn hiện</label>
                <div class="d-flex ms-3">
                    <div class="me-3">
                        <input type="radio" name="anhien" class="form-check-input" <?=$loai['anhien']==0 ? "checked":""?> value="0">
                        <label for="" class="form-check-label">Ẩn</label>
                    </div>
                    <div class="ms-3">
                        <input type="radio" name="anhien" class="form-check-input" value="1" <?=$loai['anhien']==1 ? "checked":""?>>
                        <label for="" class="form-check-label">Hiện</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 d-flex Justify-conten-center">
            <input type="hidden" name="id_loai" value="<?=$loai['id_loai']?>">
            <button class="btn btn-outline-primary w-25" type="submit">Cập nhật loại sản phẩm</button>
        </div>
    </form>
</div>
