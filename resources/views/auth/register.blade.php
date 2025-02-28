<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zarasha</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../image/logozarashanobg.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../image/logozarashanobg.png" alt="logo" class="align-content-center">
                            </div>
                            <h4 class="text-center">New here?</h4>
                            <h6 class="font-weight-light text-center">Signing up is easy. It only takes a few steps</h6>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3 inputan">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                                    @error('username')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="emailHelp">
                                    @error('first_name')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="emailHelp">
                                    @error('last_name')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                    @error('email')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    @error('password')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="exampleInputPassword2" class="form-label">Password Confirmation</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                                    @error('password_confirmation')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp">
                                    @error('address')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" id="city" aria-describedby="emailHelp">
                                    @error('city')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 inputan">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" name="phone" class="form-control" id="phone" aria-describedby="emailHelp">
                                    @error('phone')
                                        <div id="emailHelp" class="form-text error" role="alert">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                                <div class="text-center mt-3" style="margin-bottom: 100px;">
                                    <a href="/login">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
