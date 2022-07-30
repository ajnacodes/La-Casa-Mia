<?php 
require_once "components/db_connect.php";


$sql = "SELECT * FROM properties";
$result = mysqli_query($connect, $sql);
$tbody ="";
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {

    $tbody .= "
    <tr class='productsRow'>

    <td>
    <h5 class='card-title text-center'>".$row['title']."</h5>
    </td>

    <td>
      <img class='card-img-top'  src='../img/".$row['image']."' alt='Car image'>
    </td>

    <td>
    <h5 class='card-title text-center'>".$row['size']."</h5>
    </td>

    
    <td>
    <h5 class='card-title text-center'>".$row['rooms_n']."</h5>
    </td>

    
    <td>
    <h5 class='card-title text-center'>".$row['city']."</h5>
    </td>

 
    <td>
    <h5 class='card-title text-center'>".$row['price']."</h5>
    </td>

    
    <td>
    <h5 class='card-title text-center'>".$row['address']."</h5>
    </td>

    
    <td>
    <h5 class='card-title text-center'>".$row['longitude']."</h5>
    </td>

    
    <td>
    <h5 class='card-title text-center'>".$row['latitude']."</h5>
    </td>

    
    <td>
    <h5 class='card-title text-center'>".$row['price_reduction']."</h5>
    </td>

    
    <td>
    <a href='update.php?id=" .$row['id']."'><button class='action-button' type='button'><i class='fa-solid fa-pen'></i> </button></a>
<br />
    <a href='delete.php?id=" .$row['id']."'><button class='action-button action-button3' type='button'><i class='fa-solid fa-trash-can'></i></button></a>
    </td>
   

</tr>
    ";
    
 
} }
else{
  $tbody= "<h5 class='card-title'>No data available</h5>";
}
?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Properties CRUD Collection</title>
</head>
<body>




<form id="msform">
<fieldset>
  <h1>Real Estate Agency</h1>
  <a href="create.php"><button class='action-button addBookbtn' type="button"> New Property</button></a>

 <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="actionss">Title</th>
          <th class="actionss">Image</th>
          <th class="actionss">Size</th>
          <th class="actionss">Rooms</th>
          <th class="actionss">City</th>
          <th class="actionss">Price</th>
          <th class="actionss">Address</th>
          <th class="actionss">Longitute</th>
          <th class="actionss">Latitude</th>
          <th class="actionss">Reduced</th>
          <th class="actionss">Actions</th>
        </tr>
      </thead>
    </table>
</div>

  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php echo $tbody?>
      </tbody>
    </table>
  </div>
</fieldset>
</form>



</body>
</html>
