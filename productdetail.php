<?php
include('header.php');
$user_id=$_GET['id'];
include('conection.php');
$user_data=mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products where id='".$user_id."'"));
if($user_data['in_stock']==='0') {
    ?>
    <!---------------------------------product detail------------------------------>
    <div class="container-fluid">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="admin/uploads/<?php echo $user_data['path']; ?>" class="card-img-top" alt="...">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="detail">
                                <p>Product Price: PKR <?php echo $user_data['price']; ?></p>
                                <p>Product Code: <?php echo $user_data['p_code']; ?></p>
                                <p>Product in Stock: <?php

                                    if ($user_data['in_stock'] === '0') {
                                        echo "No";
                                    } else {
                                        echo "Yes";
                                    }

                                    ?></p>
                                <p>Product Discount: <?php echo $user_data['dicount']; ?>%</p>
                                <p>Color: <?php echo $user_data['size']; ?></p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container section ">
            <div class="row">
                <div class="col">
                    <h2 class="section-head">Product Details</h2>
                </div>
            </div>
        </div>
        <div class="container pb-4">

            <div class="row">

                <div class="col-md-9 text-align-center">
                    A paragraph is a series of sentences that are organized and coherent, and are all related to a
                    single topic.
                    Almost every piece of writing you do that is longer than a few sentences should be organized into
                    paragraphs.
                    Paragraphs can contain many different kinds of information.
                    <br><br>

                    A paragraph is a series of sentences that are organized and coherent, and are all related to a
                    single topic.
                    Almost every piece of writing you do that is longer than a few sentences should be organized into
                    paragraphs.
                    Paragraphs can contain many different kinds of information.
                </div>
                <div class="col-md-3">
                    <img src="images/logo.png">
                </div>
            </div>


        </div>

    </div>
    <?php
}
else {
    ?>

    <div class="container-fluid">
        <div class="container pt-5">
            <div class="row">
                <div class=" text-center col-md-12">
                    <div class="card">
                        <h1>OUT OF STOCK</h1>
                    </div>
                </div>

            </div>
        </div>


        <div class="container section ">
            <div class="row">
                <div class="col">
                    <h2 class="section-head">Product Details</h2>
                </div>
            </div>
        </div>
        <div class="container pb-4">

            <div class="row">
            </div>


        </div>

    </div>
    <!---------------------------------product detail------------------------------>
    <?php
}
include ('footer.php');
?>
