
<!---------------------------------Slider------------------------------>
<?php
include('conection.php');
$sql2 = "SELECT * FROM products LIMIT 3";
$result2 = $db->query($sql2);
?>
<div id="myCarousel" class="carousel slide"  data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slider1.jpg" alt="Los Angeles" class="ht" width="100%" >
            <div class="carousel-caption">
                <h5> tablets</h5>
                <p>University of Lahore(UOL)</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slider2.jpg" alt="Chicago" class="ht" width="100%" >
            <div class="carousel-caption">
                <h5> Laptops</h5>
                <p>University of Lahore(UOL)</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slider3.jpg" alt="New York" class="ht" width="100%" >
            <div class="carousel-caption">
                <h5> Computers</h5>
                <p>University of Lahore(UOL)</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<!---------------------------------Slider------------------------------>

<!---------------------------------products------------------------------>
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
<!---------------------------------products------------------------------>