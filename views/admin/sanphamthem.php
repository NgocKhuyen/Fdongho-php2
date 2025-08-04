<div class="container bg-white shadow p-2 mb-3  rounded-2">
    <h4 class="mb-0">Tạo mới sản phẩm</h4>
</div>
<div class="container bg-white rounded-2 ">
    <form id="frmthemsp" action="<?=ROOT_URL?>admin/addsp_" method="post" enctype="multipart/form-data" class="mt-3">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="" class="form-label">Tên Sản Phẩm</label>
                <input type="text" name="ten_sp" class="form-control">
            </div>
            <!-- <div class="col-md-3">
                <label for="" class="form-label">Loại sản phẩm</label>
                <select class="form-select" name="idloai">
                    <option value="" disabled>Chọn loại</option>
                    <option value="1">Acer</option>
                    <option value="1">Hp</option>
                    <option value="1">Lenovo</option>
                </select>
            </div> -->
            <div class="col-md-3">
                <label for="" class="form-label">Ngày</label>
                <input type="date" name="ngay" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="" class="form-label">Giá</label>
                <input type="number" name="gia" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Giá khuyến mãi</label>
                <input type="number" name="giakm" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 form-check">
                <label for="" class="form-label mb-2">Ẩn hiện</label>
                <div class="d-flex ms-3">
                    <div class="me-3">
                        <input type="radio" name="anhien" class="form-check-input" value="0">
                        <label for="" class="form-check-label">Ẩn</label>
                    </div>
                    <div class="ms-3">
                        <input type="radio" name="anhien" class="form-check-input" value="1" checked>
                        <label for="" class="form-check-label">Hiện</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 form-check">
                <label for="" class="form-label mb-2">Nổi bật</label>
                <div class="d-flex ms-3">
                    <div class="me-3">
                        <input type="radio" name="hot" class="form-check-input" value="0" checked>
                        <label for="" class="form-check-label">Bình thường</label>
                    </div>
                    <div class="ms-3">
                        <input type="radio" name="hot" class="form-check-input" value="1">
                        <label for="" class="form-check-label">Nổi bật</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="form-label">Mô tả</label>
            <textarea name="mota" id="" class="form-control ms-2" rows="3"></textarea>
        </div>
        <div class="row mb-3">
            <label for="" class="form-label">Hình</label>
            <input type="file" name="hinh">
        </div>
        <div class="row mb-3 d-flex Justify-conten-center ms-2">
            <input type="hidden" name="id_sp" value="<?=$sp['id_sp']?>">
            <button class="btn btn-outline-primary w-25" type="submit">Thêm sản phẩm</button>
        </div>
    </form>
</div>
