<?php include 'Connection.php'; ?>
<?php
$querys = 'select * from product';
($res = mysqli_query($con, $querys)) or die('incorrect Query!!');
?>
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
          <a class="nav-link " href="index.php">ADD PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ViewProduct.php">VIEW PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="EditProduct.php">EDIT PRODUCT</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>

  <div class="pagebody">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Pricture</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Weight</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while ($data = mysqli_fetch_assoc($res)) 
        { 
        ?>
      <tr>
        <td><div class="productImage" style="background-image: url('<?= $data['Image'] ?>');"></td>
        <td><?= $data['Name'] ?></td>
        <td><?= $data['Price'] ?></td>
        <td><?= $data['Weight'] ?></td>
        <td><?= $data['Status'] ?></td>
      </tr>
      <?php  } 
              ?>
    </tbody>
  </table>
</div>


  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>