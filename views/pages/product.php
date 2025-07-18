<main>
    <div class="container-fluid bg-infor mb-3">
        <div class="container ps-0">
            <div class="d-flex align-items-center text-dark fw-semibold p-3 m-0">
                <p class="m-0">Trang chủ</p>    
                <i class="bi bi-caret-right-fill ms-2 me-2 title"></i>
                <p class="title m-0">Danh mục sản phẩm</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 border border-2 rounded mb-3">
                <div class="p-2 mb-2 border-bottom">
                    <h4 class="fw-semibold">Danh mục sản phẩm</h4>
                </div>
                <div class="fw-semibold mb-3">
                    <a href="" class="p-1 nav-link link-hover">
                        Sản phẩm bán chạy
                    </a>
                    <a href="" class="p-1 nav-link link-hover">Sản phẩm mới</a>
                    <a href="" class="p-1 nav-link link-hover">Đồng hồ nam</a>
                    <a href="" class="p-1 nav-link link-hover">Đồng hồ nữ</a>
                </div>

                <div class="mb-3">
                    <div class="border-bottom mb-2">
                        <h5 class="fw-semibold">Lọc theo giá</h5>
                    </div>
                    <div class="mb-2">
                        <label for="customRange1" class="form-label">Giá thấp</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                    <div class="mb-2">
                        <label for="customRange1" class="form-label">Giá Cao</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                    <button class="btn btn-dr">Lọc</button>
                </div>

                <div class="mb-3">
                    <div class="border-bottom mb-2">
                        <h5 class="fw-semibold">Lọc theo màu</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <button class="btn bt-col">Trắng</button>
                        <button class="btn bt-col">Vàng</button>
                        <button class="btn bt-col">Đen</button>
                        <button class="btn bt-col">Titan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between border border-2 rounded p-2 mb-4">
                    <a href="#">
                        <i class="bi bi-grid-3x2-gap-fill fs-5 title"></i>
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="m-0 fw-semibold fs-5 me-2">Sắp xếp theo:</p>
                        <div>
                            <select name="" id="" class="form-control-sm ">
                                <option value="">--Chọn--</option>
                                <option value="">Giá tăng dần</option>
                                <option value="">Giá giảm dần</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Start danh sách sản phẩm  -->
                <div class="row">
                    <div class="col-6 col-md-4 mb-3">
                        <div class="card text-center shadow">
                            <div class="img-hover img-thumbnail">
                                <img src="<?=PUBLIC_URL?>/image/donghonam1.webp" class="w-100" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Đồng Hồ Nam I&W Carnival 787G2 Automatic</h5>
                                <h5 class="card-text fw-medium title">5.580.000₫</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End danh sách sản phẩm  -->

                <!-- Start Phân trang -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination  justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Phân trang -->
            </div>
        </div>
    </div>
</main>