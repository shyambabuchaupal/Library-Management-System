<div class="offcanvas offcanvas-start bg-dark text-white sidevar_nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class='text-secondary small fw-bold text-uppercase'>core</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>dashboard.php">
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
                                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>books/add.php">
                                        <i class="fa-solid fa-plus me-2"></i>Add New </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>books/index.php">
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