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
          <a class="nav-link " href="ViewProduct.php">VIEW PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="EditProduct.php">EDIT PRODUCT</a>
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
        <th scope="col">Action</th>
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
        <td> <a href="EditProduct.php?Delid=<?= $data['ProductId'] ?>"
                onclick="return confirm('Are you sure you want to delete!!');return false;"> <svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="100%" fill="red" class="bi bi-trash3-fill"
                  viewBox="0 0 16 16">
                  <path
                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                </svg></a>&nbsp;</span>

                <span aria-hidden="true"><a href="Edit.php?id=<?= $data[
                                    'ProductId'] ?>" class="btn" 
                                   >                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="100%" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></a>&nbsp;</span>
        </td>
      </tr>
      <?php  } 
              ?>

    </tbody>

  </table>

</div>
   <?php 
            
            error_reporting(0);
            $DelID = $_GET['Delid'];
            $quer = "delete from product where ProductId = $DelID";
            $res = mysqli_query($con, $quer);
            echo $res;
            if ($res) {
                echo "<script>alert('Data Deleted!!'); window.location.href = 'EditProduct.php';</script>";
            }
            mysqli_close($con);
            ?>


  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>