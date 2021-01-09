<?php
include ('header.php');
?>
<?php
include('conection.php');
$sql2 = "SELECT * FROM products";
$result2 = $db->query($sql2);
?>
    <!---------------------------------product detail------------------------------>
    <div class="container-fluid">

        <div class="container section">
            <div class="row-md-12">
                <div class="col">
                    <h2 class="section-head">Latest Products</h2>
                </div>
            </div>

            <div class="row my-3">
                <?php while($res2 = mysqli_fetch_array($result2)) { ?>
                    <a href="productdetail.php?id=<?php echo $res2['id']; ?>">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="admin/uploads/<?php echo $res2['path']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">  <?php
                                        include ('conection.php');
                                        $sql1 = "SELECT * FROM catagories WHERE id='".$res2['category_id']."'";
                                        $user_data=mysqli_fetch_array(mysqli_query($db, $sql1));

                                        echo $user_data['name'];

                                        ?></h4>
                                    <p class="card-text"><?php echo $res2['description']; ?></p>
                                    <a href="#" class="btn btn-primary">Read more..</a>
                                </div>

                            </div>
                        </div>
                    </a>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!---------------------------------product detail------------------------------>

<?php
include ('footer.php');
?>