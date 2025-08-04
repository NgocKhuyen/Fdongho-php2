<div class="container bg-white shadow p-2 mb-3  rounded-2">
    <h4 class="mb-0">Tạo mới loại</h4>
</div>
<div class="container bg-white rounded-2">
    <form id="frmthemloaisp" action="<?=ROOT_URL?>admin/addloai_" method="post" class="mt-3 mb-3">
        <div class="row mb-3">
            <div class="mb-3">
                <label for="" class="form-label">Tên loại</label>
                <input type="text" name="ten_loai" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Thứ tự</label>
                <input type="number" name="thutu" class="form-control">
            </div>
            <div class="mb-3 form-check">
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
        </div>
        <div class="row d-flex Justify-conten-center ms-1">
            <input type="hidden" name="id_loai" value="<?=$loai['id_loai']?>">
            <button class="btn btn-outline-primary w-25 " type="submit">Thêm loại</button>
        </div>
    </form>
</div>
