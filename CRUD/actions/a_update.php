<?php
require_once "../components/db_connect.php";
require_once "../components/file_upload.php";

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
    $id = $_POST['id'];
    $uploadError = '';
    $image = file_upload($_FILES['image']);
    if ($image->error === 0) {
        ($_POST['image'] == "placeholder.jpeg") ?: unlink("../../img/$_POST[image]");
        $sql = "UPDATE properties SET  title = '$title', size = '$size', 
        rooms_n = '$rooms_n', city = '$city', price = '$price',
        image = '$image->fileName', 
        address = '$address', longitude = '$longitude',
        latitude = '$latitude',
        price_reduction = '$price_reduction'
         WHERE id = {$id}";
    } else {
        $sql = "UPDATE properties SET  title = '$title', size = '$size', 
        rooms_n = '$rooms_n', city = '$city', price = '$price',
        address = '$address', longitude = '$longitude',
        latitude = '$latitude',
        price_reduction = '$price_reduction'
         WHERE id = {$id}";
    }
    if (mysqli_query($connect, $sql)) {
        
        $message = "The record was successfully updated";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }else{
      
       $message = "Error while updating record : <br>" . mysqli_connect_error();
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
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
    <link rel="stylesheet" href="../css/a_update.css">
    <title>CRUD</title>
</head>

<body>

<!--  form -->
<form id="msform">

  <!-- fieldset -->
  <fieldset >
    <h2 class="fs-title">Update request response</h2>
    <h3 class="fs-subtitle"><p><?php echo ($message) ?? ''; ?></p></h3>
    <h3 class="fs-subtitle"> <p><?php echo ($uploadError) ?? ''; ?></p></h3>
<br>
<a href='../update.php?id=<?php echo $id;?>'><button class="action-button" type='button'>Go back</button></a>

<a href='../index.php'><button class="action-button" type='button'>Go home</button></a>


  </fieldset>

  </form>
</body>

</html>