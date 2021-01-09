<?php
include('header.php');
?>

<!--form-->
<div class=" my-5 px-auto  container content-align-center">
    <div class="container mx-auto w-50">
        <h1>ADD PRODUCT</h1>
    <form method="POST" action="add.php" enctype="multipart/form-data">
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
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
    <option selected>Choose...</option>
    <option value="1">Mobile</option>
    <option value="2">Laptop</option>
    <option value="3">Computer</option>
  </select>
</div>
        <div class="form-group ">
            <label for="inputPassword4">Product Name</label>
            <input type="text" name="title" class="form-control" id="inputPassword4" placeholder="Product Nmae">
        </div>

        <div class="form-group ">
            <label for="pri">Price</label>
            <input type="text" class="form-control" id="pri" name="pric" placeholder="Price">
        </div>
   
        <div class="form-group ">
            <label for="prodct_code">Product Code</label>
            <input type="text" name="code" class="form-control" id="prodct_code" placeholder="Product Code">
        </div>
        <div class="form-group ">
            <label for="discont">Discount</label>
            <input type="text" name="disc" class="form-control" id="discont" placeholder="Discount%">
        </div>
        <div class="form-group ">
            <label for="Color">Color</label>
            <input type="text" name="size" class="form-control" id="prodct_size" placeholder="Color">
        </div>
        <div class="form-group ">
            <label for="prodct_dis">Product Description</label>
            <textarea name="descr" class="form-control" aria-label="With textarea"></textarea>
        </div>
</div>
    <div class="row">
        <div class="offset-4 col-4">
                 <input type="submit" name="sub" class="btn btn-primary" name="Add">
    </div>
    </div>
</form>

</div>
<!--form end-->
<?php
include('footer.php');
?>
