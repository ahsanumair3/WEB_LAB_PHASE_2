<?php
include('header.php');
include('conection.php');

    $sql = "SELECT * FROM products";
    $result = $db->query($sql);
    ?>

<div class="">

    <h2>Product Details</h2>
    <br>
<a class="btn btn-primary" href="addproduct.php">ADD ITEMS</a>

    <div class="pull-right">
       <!-- /*<button class="btn btn-primary"><a href="add.php" style="color:white">Add New</a></button>*/ -->
    </div><br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>P_ID</th>
            <th>P_name</th>
            <th>P_Price</th>
            <th>P_Code</th>
            <th>IN_stock</th>
            <th>P_Discount</th>
            <th>P_Size</th>
            <th>Image</th>
            <th>P_Detail</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php while($res = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $res['id'] ?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['price'] ?></td>

                <td><?php echo $res['p_code'] ?></td>

                <td>
                    <?php

                    if($res['in_stock']==='0'){
                        ?>
                        <a href="stock.php?id=<?php echo $res['id'] ?>" class="btn btn-success">IN STOCK</a>
                    <?php
                    }
                    else{
                        ?>
                        <a href="stock.php?id2=<?php echo $res['id'] ?>" class="btn btn-danger">OUT STOCK</a>
                    <?php

                    }

                    ?>
                </td>

                <td><?php echo $res['dicount'] ?></td>

                <td><?php echo $res['size'] ?></td>

                <td><img src="./uploads/<?php echo $res['path'] ?>" width="50px" height="50px"></td>


                <td><?php echo $res['description'] ?></td>
                <td>
                <td><a class="btn btn-warning" href="update.php?id=<?php echo
                        $res['id']?>" style="color:white">Update</a>
                    <button class="btn btn-danger" onclick="delete_row(<?php  echo $res['id']   ?>)">Delete</button></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<script>
    function delete_row(id)
    {
        //console.log($id);
        //return false;
        if(confirm("Are you sure you want to delete?"))
        {
            window.location.href="dlt.php?id="+id+"";
        }
    }
</script>
<?php
include ('footer.php');
?>