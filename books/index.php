<?php 
include_once('../config/config.php');
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
                 <?php include_once(DIR_URL.'includes/alert.php');?>
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
    <?php include_once(DIR_URL.'includes/footer.php') ?>