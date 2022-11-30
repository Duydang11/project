<?php 
    //load file layout vao day
    $layout = "LayoutTrangTrong.php";
 ?>

<div class="dangnhap">
    <div class="container mt-5 loginForm mb-5 ">
        <div class="row">
            <div class="col-12 col-xl-6 loginForm-left">
                <div class="content">
                    <p class="title text-center fs-5">good <span>lreads</span> </p>
                </div>
                <div class="form-area container ">
                    <form class="row g-3 needs-validation" novalidate method='post' action="index.php?controller=account&action=loginPost">
                        <div class="col-12 text-center title-form">
                            <h2>Login Account</h2>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Mark" required name="email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <label for="validationCustomUsername" class="form-label">Email Address*</label>
                            <div class="input-group has-validation">

                                <input type="text" class="form-control" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a email.
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Password*</label>
                            <input type="password" class="form-control" id="validationCustom01" value="********"
                                required name="password">
                            <p>Password must be at least 6 character</p>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <button class="btn btn-primary" type="submit" onclick="document.getElementById('verify').style.display = 'block'">Continue</button>
                        </div>
                        <div class="col-12 mb-4">
                          <p class="">Tạo tài khoản mới</p>
                          <a href="index.php?controller=account&action=register" class="button">Đăng ký</a> </div>
                        </div>
                    </form>
                  
                </div>
            </div>
            <div class="col-12 col-xl-6  img-right">
                <div class="container verify loginForm-left" id="verify">
                    <div class="verify-title">
                        <p class="title text-center fs-5">good <span>lreads</span> </p>
                    </div>
                    <div class="verify-content text-center">
                        <h3 class="text-center mt-3 mb-3 fs-5">Verify Email Address</h3>
                        <p>Please enter the OTP we've send to Email</p>
                        <div class="form-area">
                            <form class="row g-3 needs-validation mt-3" novalidate>

                                <div class="col-12">
                                    <label for="validationCustom01" class="form-label">OTP</label>
                                    <input type="password" class="form-control" id="validationCustom01" value="Mark"
                                        required>
                                        <p class="text-end  mt-2">Resend OTP</p>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-12 mb-4">
                                    <button class="btn btn-primary" type="submit">Verify</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




