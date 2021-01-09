<?php
include('header.php');
$user_id=$_GET['id']; 
include('conection.php');
$user_data=mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products where id='".$user_id."'"));

if(isset($_POST['up']))
{

    //update the user
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
    move_uploaded_file($_FILES['file']['tmp_name'], $target);

    $sqlu="UPDATE products SET path = '$image',name='$title',category_id='$catagry',price='$price',p_code='$p_code',dicount='$discount',size='$p_size',description='$description' WHERE id = '$user_id'";
  $db->query($sqlu);
    header('Location:detail.php?message=Updated Successfully');
}
?>
<!--form-->
<div class=" my-5 px-auto  container content-align-center">
    <div class="container mx-auto w-50">
        <h1>ADD PRODUCT</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
        <div>
            <img src="uploads/<?php echo $user_data['path']; ?>" width="100px" height="100px">
        </div>
  <div class="custom-file">
    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
     <div class="input-group mb-3">
  <div class="input-group-prepend">
      <label class="input-group-text" for="catagry">Select Category</label>
  </div>
  <select class="custom-select" name="Category" id="catagry">
      <?php
      $sql1 = "SELECT * FROM catagories";
      $result1 = $db->query($sql1);
      while($res1 = mysqli_fetch_array($result1)){
          if($res1['id']==$user_data['category_id']){
              ?>
              <option value="<?php echo $res1['id'];?>" selected><?php echo $res1['name']; ?></option>
              <?php
          }
          else{
              ?>
              <option value="<?php echo $res1['id'];?>"  ><?php echo $res1['name']; ?></option>
              <?php
          }
          ?>

      <?php
      }
   ?>
  </select>
</div>
        <div class="form-group ">
            <label for="inputPassword4">Product Name</label>
            <input type="text" value="<?php echo $user_data['name']; ?>" name="title" class="form-control" id="inputPassword4">
        </div>

        <div class="form-group ">
            <label for="pri">Price</label>
            <input type="text" value="<?php echo $user_data['price']; ?>" class="form-control" id="pri" name="pric" >
        </div>

        <div class="form-group ">
            <label for="prodct_code">Product Code</label>
            <input type="text" name="code" class="form-control" value="<?php echo $user_data['p_code']; ?>" id="prodct_code" >
        </div>
        <div class="form-group ">
            <label for="discont">Discount</label>
            <input type="text" name="disc" value="<?php echo $user_data['dicount']; ?>" class="form-control" id="discont">
        </div>
        <div class="form-group ">
            <label for="prodct_size">Color</label>
            <input type="text" name="size" value="<?php echo $user_data['size']; ?>" class="form-control" id="prodct_size">
        </div>
        <div class="form-group ">
            <label for="prodct_dis">Product Description</label>
            <textarea name="descr"  class="form-control" aria-label="With textarea"><?php echo $user_data['description']; ?></textarea>
        </div>
</div>
    <div class="form-group ">
                 <input type="submit" name="up" class="btn btn-primary" value="Update">
    </div>
        </form>
</div>
<!--form end-->
<?php
include('footer.php');
?>