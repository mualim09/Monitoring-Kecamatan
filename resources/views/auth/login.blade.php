<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" id="main-style-link">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Signin</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input name="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group text-left mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Save credentials
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('admin/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/pcoded.min.js') }}"></script>



</body>

</html>
