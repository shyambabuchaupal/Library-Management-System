<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Manage-Book | Library Management System</title>
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
                            <li>
                                <hr />
                            </li>
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
                    <h5 class='fw-bold text-uppercase'>Manage Book</h5>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Books
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Publisher Name</th>
                                        <th scope="col">Author Name</th>
                                        <th scope="col">ISBN Number</th>
                                        <th scope="col">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>javaScript</td>
                                        <td>O'Reilly Media, Inc</td>
                                        <td>Brendan Eich</td>
                                        <td>1234324</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm shadow-none">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm shadow-none">Delete</a>
                                        </td>
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