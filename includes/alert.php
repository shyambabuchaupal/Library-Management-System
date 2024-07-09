<?php
if(isset($_SESSION['sucess'])){
    ?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Great!</strong><?php echo $_SESSION['sucess']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION['sucess']);
    
}
?>

<?php
if(isset($_SESSION['error'])){
    ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Opps!</strong><?php echo $_SESSION['error'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION['error']);
}
?>