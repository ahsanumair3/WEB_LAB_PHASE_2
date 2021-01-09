<?php

include('conection.php');
//include('accessControl.php');
$row_id=$_GET['id'];
$delete_query="DELETE FROM products where id=".$row_id."";

if($db->query($delete_query))
{
    /*delete successfully*/

    header('Location: detail.php?message="deleted successfully"');

}
else
{


    header('Location: detail.php?message="Some thing went wrong"');
}

//header('Location: main.php');
?>