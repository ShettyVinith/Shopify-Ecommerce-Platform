<!-- delete logic -->
<?php
include 'connect.php';
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($conn,"delete from `products` where id=$delete_id") or die("Query Failed");
    if($delete_query){
        echo "Product is deleted";
        header('location:view_products.php');
    }else{
        echo "Product is not deleted";
        header('location:view_products.php');
    }
}


?>