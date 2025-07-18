<!-- form đăng nhập -->
<div class="container">
    <div class="mb-3">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
            background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
            height: 300px;
            "></div>
                <!-- Background image -->
        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
            margin-top: -100px;
            backdrop-filter: blur(30px);
            ">
            <div class="card-body py-5 px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5 text-center">ĐĂNG NHẬP</h2>
                        <form id="frmlogin" action="" method="post">
                            @csrf
                            <div class="ms-4 me-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control border-primary-subtle shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Mật khẩu:</label>
                                    <input type="password" name="matkhau" class="form-control border-primary-subtle shadow-none">
                                </div>
                                <div class="row mb-4 mt-3">
                                    <div class="col-6 d-flex justify-content-start">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" name="luumatkhau" type="checkbox" id="form2Example31" />
                                            <label class="form-check-label" for="form2Example31"> Lưu mật khẩu </label>
                                        </div>
                                    </div>
    
                                    <div class="col-6 d-flex justify-content-end">
                                        <!-- Simple link -->
                                        <a href="" class="nav-link">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                
                                @if (Session::has('message'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('message') }}
                                    </div>
                                    @php
                                        Session::forget('message');
                                    @endphp
                                @endif

                                <!-- Submit button -->
                                <div class="row d-flex justify-content-center">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn add-cart btn-block mb-4 mt-3">
                                        ĐĂNG NHẬP
                                    </button>
                                </div>
    
                                <div class="text-center">
                                    <p>Bạn chưa có tài khoản. Đăng ký <a href="{{ route('register') }}">tại đây</a>.</p>
                                </div>
                                <!-- <div class="mb-3">
                                    <button class="btn btn-outline-success" type="submit">Đăng nhập</button>   
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- form đăng nhập -->