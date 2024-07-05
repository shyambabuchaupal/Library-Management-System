<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Library Management System</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/930825582b.js" crossorigin="anonymous"></script>
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- Top navbar start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">

            <button class="navbar-toggler mr-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-uppercase fw-bold me-auto" href="#">star Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none my-3 my-lg-0" placeholder="Search..."
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary btn-primari text-white shadow-none my-3 my-lg-0"
                            type="button" id="button-addon2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav  mb-2 mb-lg-1 ml-2">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="./assets/image/download.png" alt="img" class='admin_img'>
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password </a></li>
                            <li><hr/></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>


                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Top navbar End  -->

    <!-- Sidebar start  -->


    <div class="offcanvas offcanvas-start bg-dark text-white sidevar_nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class='text-secondary small fw-bold text-uppercase'>core</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-gauge me-2"></i>Dashboard </a>
                </li>
                <li class="nav-item my-0">
                    <hr />
                </li>
                <li class="nav-item">
                    <div class='text-secondary small fw-bold text-uppercase'>inventory</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#bookmght" role="button"
                        aria-expanded="false" aria-controls="bookmght">
                        <i class="fa-solid fa-book me-2"></i> Book Management
                        <span class='right-icon float-end'><i class="fa-solid fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="bookmght">
                        <div>
                            <ul class='navbar-nav ps-3'>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="addBook.php">
                                        <i class="fa-solid fa-plus me-2"></i>Add New </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="manageBook.php">
                                        <i class="fa-solid fa-list me-2"></i>Manage All </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#studentmght" role="button"
                        aria-expanded="false" aria-controls="studentmght">
                        <i class="fa-solid fa-users me-2"></i> Students Management
                        <span class='right-icon float-end'><i class="fa-solid fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="studentmght">
                        <div>
                            <ul class='navbar-nav ps-3'>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa-solid fa-plus me-2"></i>Add New </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa-solid fa-list me-2"></i>Manage All </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </li>

                <li class="nav-item my-0">
                    <hr />
                </li>
                <li class="nav-item">
                    <div class='text-secondary small fw-bold text-uppercase'>Business</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#bookloanmght" role="button"
                        aria-expanded="false" aria-controls="bookloanmght">
                        <i class="fa-regular fa-bookmark me-2"></i> Book Loan
                        <span class='right-icon float-end'><i class="fa-solid fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="bookloanmght">
                        <div>
                            <ul class='navbar-nav ps-3'>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa-solid fa-plus me-2"></i>Add New </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa-solid fa-list me-2"></i>Manage All </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#subcropmght" role="button"
                        aria-expanded="false" aria-controls="subcropmght">
                        <i class="fa-solid fa-indian-rupee-sign me-2"></i> Subscription
                        <span class='right-icon float-end'><i class="fa-solid fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="subcropmght">
                        <div>
                            <ul class='navbar-nav ps-3'>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa-solid fa-plus me-2"></i>Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa-solid fa-list me-2"></i>Purchase History </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </li>

                <li class="nav-item my-0">
                    <hr />
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>Logout </a>
                </li>

            </ul>

        </div>
    </div>
    <!-- Sidebar End  -->

    <!-- Main Content Start  -->
    <main class='mt-1 pt-3 '>
        <div class='container-fluid'>
            <!-- cards  -->
            <div class="row">
                <div class="col-md-12">
                    <h5 class='fw-bold text-uppercase'>dashboard</h5>
                    <p>Statistics of the System! </p>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted small text-uppercase fw-bold">Total Book</h5>
                            <h1 class='fs-4 fw-bold'>130</h1>

                            <a href="#" class="card-link text-decoration-none">view more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted text-uppercase fw-bold small">Total students</h5>
                            <h1 class='fs-4 fw-bold'>84</h1>

                            <a href="#" class="card-link text-decoration-none">view more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted text-uppercase fw-bold small">Total revenue</h5>
                            <h1 class='fs-4 fw-bold'><i class="fa-solid fa-indian-rupee-sign me-1"></i>130,0000</h1>

                            <a href="#" class="card-link text-decoration-none">view more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted text-uppercase small fw-bold">Total Booksloan</h5>
                            <h1 class='fs-4 fw-bold'>35</h1>

                            <a href="#" class="card-link text-decoration-none">view more</a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- tabs  -->
            <div class="row ">
                <div class="col-lg-12 mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-uppercase fs-6" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">New Student</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">recent loan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">recent subscription</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Preparing For</th>
                                        <th scope="col">Registered On </th>
                                        <th scope="col">Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="badge text-bg-danger">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Loan Date</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>12/06/2024</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>12/06/2024</td>

                                        <td><span class="badge text-bg-danger">Returned</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Start Date </th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>12/06/2024</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>12/06/2024</td>
                                        <td><span class="badge text-bg-danger">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Main Content End  -->
    <script src="./assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>