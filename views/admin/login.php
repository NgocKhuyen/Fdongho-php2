<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>/css/admin.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">
                <div class="col-lg-4 d-none d-lg-flex">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                </div>
                <div class="col-lg-6">
                    <div class="card-body py-5 px-md-5">
                        <h2 class="fw-bold mb-5 text-center">ĐĂNG NHẬP</h2>
                        <form action="<?=ROOT_URL."admin/login_"?>" method="post">
                            <!-- Email input -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                                <!-- <p class="text-danger p-1">{{ errors.email }}</p> -->
                            </div>
                            
                            <!-- Password input -->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="matkhau" placeholder="Nhập mật khẩu">
                                <label for="floatingPassword">Mật khẩu</label>
                                <!-- <p class="text-danger p-1">{{ errors.password }}</p> -->
                            </div>
                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4 mt-3">
                                <div class="col-6 d-flex justify-content-start">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
                                        <label class="form-check-label" for="form2Example31"> Lưu mật khẩu </label>
                                    </div>
                                </div>

                                <div class="col-6 d-flex justify-content-end">
                                    <!-- Simple link -->
                                    <a href="#" class="nav-link text-primary">Quên mật khẩu?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="row d-flex justify-content-center">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 mt-3">
                                    ĐĂNG NHẬP
                                </button>
                            </div>

                            <!-- <div class="text-center">
                                //chuyển sang trang đăng kí
                                <p>Bạn chưa có tài khoản. Đăng ký <RouterLink to="/dang-ki">tại đây</RouterLink>.</p>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
