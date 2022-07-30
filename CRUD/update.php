<?php
require_once "components/db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM properties WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
         $image = $data['image'];
        $size = $data['size'];
        $rooms_n = $data['rooms_n'];
        $city = $data['city'];
        $price = $data['price'];
        $address = $data['address'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $price_reduction = $data['price_reduction'];
       

    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/update.css">
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>

</head>

<body>
 
 

    <!--  form -->
<form id="msform" action="actions/a_update.php" method="post" enctype="multipart/form-data">

<!-- fieldset -->
<fieldset>

  <h2 class="fs-subtitle1">Edit product</h2>
  <img  class="imgStyle" src='../img/<?php echo $image?>' alt="">
  <h3 class="fs-subtitle">Title</h3>
  <input class="form-control" type="text" name="title" placeholder="Book title" value="<?php echo $title?>"/>

  <h3 class="fs-subtitle">Image</h3>
  <input class="form-control" type="file" style="color: purple;" name="image" placeholder="Choose file" />
  <input type="hidden" name="id" value="<?php echo $id?>" />
  <input type="hidden" name="image" value="<?php echo $image?>" />

  <h3 class="fs-subtitle">Size</h3>
  <input class="form-control" type="number" name="size" placeholder="size" value="<?php echo $size?>"/>

  <h3 class="fs-subtitle">Rooms number</h3>
  <input class="form-control" type="number" name="rooms_n" placeholder="Rooms number" value="<?php echo $rooms_n?>"/>

  <h3 class="fs-subtitle">City</h3>
  <input class="form-control" type="text" name="city" placeholder="City" value="<?php echo $city?>"/>

  <h3 class="fs-subtitle">Price</h3>
  <input class="form-control" type="number" name="price" placeholder="Price" value="<?php echo $price?>"/>

  <h3 class="fs-subtitle">Address</h3>
  <input class="form-control" type="text" name="address" placeholder="Address" value="<?php echo $address?>"/>

  
  <h3 class="fs-subtitle">Longitude</h3>
  <input class="form-control" type="text" name="longitude" placeholder="Longitude" value="<?php echo $longitude?>"/>

  
  <h3 class="fs-subtitle">Latitude</h3>
  <input class="form-control" type="text" name="latitude" placeholder="Latitude" value="<?php echo $latitude?>"/>

  
  <h3 class="fs-subtitle">Price reduction</h3>
  <input class="form-control" type="text" name="price_reduction" placeholder="Price reduction" value="<?php echo $price_reduction?>"/>

  

  <button class='action-button updateBtn' type="submit">Update changes</button>
<br>
<h3 class="fs-subtitle2">Don't want to edit product?</h3>
  <a href="index.php"><button class='action-button' type="button">Go back</button></a>

</fieldset>
</body>

</html>