<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <title>Reset Password | Library Management System</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/930825582b.js" crossorigin="anonymous"></script>
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body style="background:#212529;">
    <!-- Login form start  -->
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-md-12 login-form">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-5 d-flex align-items-center">
                            <img src="./assets/image/login.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-bold fs-5">Star Library</h5>
                                <p class="card-text">Reset Password!.</p>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Reset Password Code</label>
                                        <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" required>
                                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                                        <input type="password" class="form-control shadow-none"
                                         id="exampleInputPassword1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control shadow-none"
                                         id="exampleInputPassword1" required>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary shadow-none w-25">Submit</button>
                                </form>
                                <hr/>
                                <a href="forgetPassword.php" class="card-link text-decoration-none">Login Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Login form End  -->


    <script src="./assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>