<?php 
include_once('config/config.php');
include_once('config/database.php');
include_once(DIR_URL.'includes/header.php');
include_once(DIR_URL.'includes/topbar.php') ;
include_once(DIR_URL.'includes/sidebar.php');
?>
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
                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">recent loan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false">recent subscription</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
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
<?php include_once(DIR_URL.'includes/footer.php') ?>