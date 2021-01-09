
<?php
    if(isset($_POST['sub']))
    {
include ('conection.php');
        $image =$_FILES['file']['name'];
        $title=$_POST['title'];
        $catagry=$_POST['Category'];
        $name=$_POST['title'];
        $price=$_POST['pric'];
        $p_code=$_POST['code'];
        $discount=$_POST['disc'];
        $p_size=$_POST['size'];
        $description=$_POST['descr'];
        $target="uploads/".basename($image);
        $query="insert into products (category_id,name,price,p_code,dicount,size,description,path,title) values('$catagry','$name','$price','$p_code','$discount','$p_size','$description','$image','$title')";
        // mysqli_query($db,$query);


        move_uploaded_file($_FILES['file']['tmp_name'], $target);
if ($db->query($query) === TRUE) {
    header('Location:detail.php?message=Data Inserted Successfully');
} else {
  echo "Error: " . $query . "<br>" . $db->error;
}



}
?>