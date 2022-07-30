<?php
require_once '../components/db_connect.php';
require_once '../components/file_upload.php';

if ($_POST) {
    $title = $_POST['title'];
    $size = $_POST['size'];
    $rooms_n = $_POST['rooms_n'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $price_reduction = $_POST['price_reduction'];

    $uploadError = '';
    //this function exists in the service file upload.
    $image = file_upload($_FILES['image']);
    $sql = "INSERT into properties
     (title, size, rooms_n, city, price, image, address, longitude,
      latitude, price_reduction) VALUES
     ('$title', '$size', '$rooms_n', '$city', '$price',
      '$image->fileName', '$address',
      '$longitude', '$latitude', '$price_reduction')";
    if (mysqli_query($connect, $sql) == true) {
        $class = "success";
        $message = " <br>
        <h3 class='fs-subtitle'>The entry below was successfully created </h3>
        <hr>
        <br>
        <h3 class='fs-subtitle2'> $title </h3>
        <h3 class='fs-subtitle2'> $size </h3>
        <h3 class='fs-subtitle2'> $rooms_n </h3>
        <h3 class='fs-subtitle2'> $city </h3>
        <h3 class='fs-subtitle2'> $price </h3>
      
        <h3 class='fs-subtitle2'> $address </h3>
       <h3 class='fs-subtitle2'> $longitude </h3>
       <h3 class='fs-subtitle2'> $latitude </h3>
       <h3 class='fs-subtitle2'> $price_reduction </h3>
       <hr>";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../css/a_create.css">
</head>

<body>
<form id="msform" class="<?=$class;?>" >

  <!-- fieldset -->
  <fieldset >
    <h2 class="fs-title">Create request response</h2>
    <div class="fs-subtitle2"><?php echo ($message) ?? ''?></div>
    <h3 class="fs-subtitle"><?php echo ($uploadError) ?? ''?></h3>
    
<br>
<a href='../index.php'><button class="action-button" type='button'>Go home</button></a>


  </fieldset>

</form>


</body>

</html>