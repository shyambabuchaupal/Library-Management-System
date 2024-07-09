<?php 
// function to the storeBook

function storeBook($conn, $param){
    extract($param);
    $datetime = date("Y-m-d H:i:s");
    $sql="INSERT INTO `books` (title, author, publication_year, isbn, category_id,created_at)
     VALUES ('$title','$author','$publication_year','$isbn','$category_id','$datetime')";
     $result = $conn->query($sql);

}


// get categories in categories table

function getcategories($conn){
    $sql = "select id , name from `categories`";
    $result = $conn->query($sql);
    return $result;
}

?>