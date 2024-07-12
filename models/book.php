<?php 
// function to the storeBook

function storeBook($conn, $param){
    extract($param);
//validation start 
if(empty($title)){
    $result = array("title" => "Title is required");
    return $result;
}else if(empty($isbn)){
    $result = array("isbn" => "ISBN is required");
    return $result;
}
else if(isIsbnUnique($conn,$isbn)){
    $result = array("isbn" => "ISBN is already registered");
    return $result;
}
//validation end

    $datetime = date("Y-m-d H:i:s");
    $sql="INSERT INTO `books` (title, author, publication_year, isbn, category_id,created_at)
     VALUES ('$title','$author','$publication_year','$isbn','$category_id','$datetime')";
     $result['success'] = $conn->query($sql);

}


// get categories in categories table

function getcategories($conn){
    $sql = "select id , name from `categories`";
    $result = $conn->query($sql);
    return $result;
}


// <!-- // Function is ISBN no. check  -->
 function isIsbnUnique($conn, $isbn){
    $sql = "select id  from `books` where id ='$isbn'";
    $result = $conn->query($sql);
   if($result->num_rows>0){
    return true;

   }else{
    return false;
   }
 }









?>