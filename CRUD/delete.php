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
  <link rel="stylesheet" href="css/delete.css">
    <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 70% ;
           }    
           .img-thumbnail{
               width: 70px !important;
               height: 70px !important;
           }    
       </style>
</head>
<body>



   

<!-- fieldset -->
<fieldset id="msform" >

  <h2 class="fs-title">Delete request</h2>
  <img  class="imgStyle" src='../img/<?php echo $image?>' alt="">
  <h3 class="fs-subtitle"><?php echo $title?></h3>

<br>

    <!--  form -->
<form action="actions/a_delete.php" method="post">
<input type="hidden" name="id" value="<?php echo $id?>" />
<input type="hidden" name="image" value="<?php echo $image?>" />
<h3 class="fs-subtitle2">Do you really want to delete this item?</h3>
  <a href="index.php"><button class='action-button' type="button">Go back</button></a>
  <button class='action-button' type="submit">Delete</button>
  </form>
</fieldset> 

 


</body>
</html>