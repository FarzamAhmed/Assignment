<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">ASSIGNMENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="margin-left: auto;">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">ADD PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ViewProduct.php">VIEW PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="EditProduct.php">EDIT PRODUCT</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <form class="form-register" action="CRUD.php" method="post" enctype="multipart/form-data">
    <div class="section row m-0">
      <div class="col-12 photoupload">
        <img src="https://pngimage.net/wp-content/uploads/2018/06/product-png-3.png" id="VisibleImage" alt="">
        <input type="file" class="choosefile" id="Image" name="Image">
      </div>
      <div class="col-12 productinfo ">
        <h1 class="box_title">Product Information</h1>
        <div class="block">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="Name" id="Name" 
                >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Weight</label>
              <input type="text" class="form-control" name="Weight" id="Weight"
                placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Price</label>
              <input type="text" class="form-control" name="Price" id="Price" 
                placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Status</label>
              <select class="form-control" name="Status" id="Status">
                <option value="">Select</option>
                <option value="Available">Available</option>
                <option value="Not Available">Not Available</option>
              </select>
            </div>
        </div>
      </div>
    </div>
    <a href="ViewProduct.php"><input type="submit" value = "submit" class = "btn btn-primary mt-4 mb-4" style = "width:60%; margin: auto; justify-content: center; display: flex;" name = "ins"></a> 
    </form>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>