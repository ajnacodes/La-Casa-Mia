<?php 
require_once "../components/db_connect.php";

if($_POST){
    $id = $_POST['id'];
    //  $image = $_POST['image'];
    //  ($image =="placeholder.jpeg")?: unlink("../../img/$image");
    //  var_dump($_POST);
    $sql = "DELETE from properties WHERE id = $id";
    if(mysqli_query($connect, $sql)){
        
        $message = "Record deleted";
    }else{
      
        $message = "Not deleted :" . $connect->error;
    }
    mysqli_close($connect);
}else{
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
 
    <link rel="stylesheet" href="../css/delete.css">
</head>
<body>
<!--  form -->
<form id="msform"  >

  <!-- fieldset -->
  <fieldset >
    <h2 class="fs-title">Update request response</h2>
    <h3 class="fs-subtitle"></p><?=$message;?></h3>
    
<br>


<a href='../index.php'><button class="action-button" type='button'>Go home</button></a>


  </fieldset>

</form>
    
</body>
</html>