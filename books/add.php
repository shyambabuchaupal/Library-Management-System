<?php 
include_once('../config/config.php');
include_once(DIR_URL.'config/database.php');
include_once(DIR_URL.'models/book.php');
// add book 
if(isset($_POST['publish'])){
    $re = storeBook($conn, $_POST); 
    if($re === true){
        $_SESSION['sucess']= "Book successfully published" .$conn->error;
        header("Location:".BASE_URL."books");
    }else{
        $_SESSION['error']= "Something went wrong try again !";
        header("Location:".BASE_URL."books");
    }
  
}
?>
<?php
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
                <?php  include_once(DIR_URL.'includes/alert.php'); ?>
                <h5 class='fw-bold text-uppercase'>Add Book</h5>

            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Fill the form! .
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo BASE_URL?>books/add.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                                        <input type="text" name="title" class="form-control shadow-none" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                                        <input type="text" class="form-control shadow-none" name="isbn" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Publiser Year</label>
                                        <input type="number" name="publication_year" class="form-control shadow-none"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Author Name</label>
                                        <input type="text" class="form-control shadow-none" name="author" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Category</label>
                                        <?php
                                         $cats=getcategories($conn);
                                         ?>
                                        <select class="form-select shadow-none" name="category_id" required>
                                            <option selected>Please Select</option>
                                            <?php
                                            while($row=$cats->fetch_assoc()){
                                                ?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                            <?php
                                            }
                                            ?>


                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <button type="submit" name="publish" class="btn btn-success">Publish</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>




                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

</main>
<!-- Main Content End  -->
<?php include_once(DIR_URL.'includes/footer.php') ?>