<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../backend/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Smabosa</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="../../backend/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../backend/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../backend/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../backend/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="../../backend/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../backend/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../backend/css/demo.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="../../backend/vendor/css/pages/page-auth.css" />
    <script src="../../backend/vendor/js/helpers.js"></script>
    <script src="../../backend/vendor/js/template-customizer.js"></script>
    <script src="../../backend/js/config.js"></script>
</head>

<body>
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <div class="d-none d-lg-flex col-lg-7 p-0">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                    <img src="../../backend/img/illustrations/auth-login-illustration-light.png" alt="auth-login-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.png" />

                    <img src="../../backend/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
                </div>
            </div>
            <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <h3 class="mb-1 fw-bold">Welcome to Smabosa! 👋</h3>
                    <p class="mb-4">login untuk mengatur semua content di website!</p>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <span class="alert-icon text-danger me-2">
                                <i class="ti ti-ban ti-xs"></i>
                            </span>
                            {{ $error }}
                        </div>
                        @endforeach
                    @endif
                    <form id="formAuthentication" class="mb-3" action="{{route('custom-login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">Masuk</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="../../backend/vendor/libs/jquery/jquery.js"></script>
    <script src="../../backend/vendor/libs/popper/popper.js"></script>
    <script src="../../backend/vendor/js/bootstrap.js"></script>
    <script src="../../backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../backend/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../backend/vendor/libs/hammer/hammer.js"></script>
    <script src="../../backend/vendor/libs/i18n/i18n.js"></script>
    <script src="../../backend/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../backend/vendor/js/menu.js"></script>

    <script src="../../backend/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../backend/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../backend/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <script src="../../backend/js/main.js"></script>

    <script src="../../backend/js/pages-auth.js"></script>
</body>

</html>