<!-- form đăng kí -->
<div class="container py-4">
    <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card cascading-right bg-body-tertiary" style="
                backdrop-filter: blur(30px);
                ">
                <div class="card-body p-5 shadow-5">
                    <h2 class="fw-bold mb-5 text-center">ĐĂNG KÍ</h2>
                    <form id="frmregister" action="" method="post">
                        @csrf 
                        <div class="ms-4 me-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Họ tên:</label>
                                <input type="text" name="hoten" class="form-control border-primary-subtle shadow-none">                                      
                            </div>
                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Số điện thoại:</label>
                                <input type="text" name="sodienthoai" class="form-control border-primary-subtle shadow-none">
                            </div> --}}
                            <div class="mb-3">
                                <label for="" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control border-primary-subtle shadow-none">
                                
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mật khẩu:</label>
                                <input type="password" name="matkhau" class="form-control border-primary-subtle shadow-none">           
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nhập lại mật khẩu:</label>
                                <input type="password" name="matkhau2" class="form-control border-primary-subtle shadow-none">           
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-danger">
                                    {{ Session::get('message') }}
                                </div>
                                @php
                                    Session::forget('message');
                                @endphp
                            @endif
                                
                            <div class="row d-flex justify-content-center">
                                <button type="submit" class="btn add-cart btn-block mb-4 mt-3">
                                    ĐĂNG KÍ
                                </button>
                            </div>
                            <div class="text-center">
                                <p>Bạn đã có tài khoản. Vui lòng đăng nhập <a href="{{ route('login') }}">tại đây</a>.</p>
                            </div>
                            <!-- <div class="mb-3">
                                <button class="btn btn-outline-success" type="submit">Đăng kí</button>   
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
    </div>
</div>
<!-- form đăng kí -->