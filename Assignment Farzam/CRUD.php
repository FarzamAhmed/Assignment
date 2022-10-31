<?php include 'Connection.php'; ?>

<?php 

    if (isset($_POST['ins'])) {

        $FileProp = $_FILES['Image'];
        $FileName = $_FILES['Image']['name'];
        $FileType = $_FILES['Image']['type'];
        $FileTempLoc = $_FILES['Image']['tmp_name'];
 
        $FileSize = $_FILES['Image']['size'];

        $folder = 'images/';
        $folder = $folder . $FileName;


        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Weight = $_POST['Weight'];
        $Status = $_POST['Status'];


        $query = " insert into product(Name, Price, Weight, Status, Image) values ('$Name','$Price','$Weight','$Status','$folder')";

        $res = mysqli_query($con, $query);
    
        if ($res) {
            echo "<script> alert('Data Inserted'); window.location.href='EditProduct.php';</script>";
            move_uploaded_file($FileTempLoc, $folder);

        }
         else {
            echo "<script> alert('Data Insertion Failed');window.location.href='EditProduct.php'; </script>";
        }
    }
 ?>


<?php 
if (isset($_POST['upd'])) 
{
    $Id = $_POST['ProductId'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Weight = $_POST['Weight'];
    $Status = $_POST['Status'];


    $FileProp = $_FILES['Image'];
    
    $FileName = $_FILES['Image']['name'];
    $FileType = $_FILES['Image']['type'];
    $FileTempLoc = $_FILES['Image']['tmp_name'];
    $FileSize = $_FILES['Image']['size'];

    $folder = 'StudentImages/';
    $folder = $folder . $FileName;

    if($FileName != "")
    {
        $query = "update product set 
        Name = '$Name',
        Price = '$Price',
        Weight = '$Weight',
        Status = '$Status',
        Image = '$folder'
        where ProductId = '$ID'";
    
        $res = mysqli_query($con, $query) or die("Query Failed");
    
        if ($res) {
            echo "<script> alert('Data Inserted');window.location.href='EditProduct.php';</script>";
            move_uploaded_file($FileTempLoc, $folder);
        }
         else {
            echo "<script> alert('Data Insertion Failed');window.location.href='EditProduct.php';</script>";
        }

    }
    else
    {

        $query = "update product set 
        Name = '$Name',
        Price = '$Price',
        Weight = '$Weight',
        Status = '$Status',
        where ProductId = '$ID'";

    $res = mysqli_query($con, $query) or die("Query Failed");

    if ($res) {
        echo "<script> alert('Data Updated');window.location.href='EditProduct.php';</script>";
        move_uploaded_file($FileTempLoc, $folder);
    }
     else {
        echo "<script> alert('Data Insertion Failed');window.location.href='EditProduct.php'; </script>";
    }
    }

} ?>