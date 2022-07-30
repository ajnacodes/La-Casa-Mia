<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New property</title>
<link rel="stylesheet" href="css/create.css">
</head>
<body>


<!--  form -->
<form id="msform" action="actions/a_create.php" method="post" enctype="multipart/form-data">

  <!-- fieldset -->
  <fieldset >
    <h2 class="fs-title">Add new property </h2>
    <h3 class="fs-subtitle">All fields required, except image</h3>
    
    <input required class="form-control" type="text" name="title" placeholder="Title" />

    <input class="form-control" type="file" name="image" placeholder="Choose file" />

    <input required  class="form-control" type="number" name="size" placeholder="Size"  />

    <input required  class="form-control" type="number" name="rooms_n" placeholder="Rooms number" /> 

    <input required  class="form-control" type="text" name="city" placeholder="City"  />

    <input required class="form-control" type="number" name="price" placeholder="Price"  />

    <input required  class="form-control" type="text" name="address" placeholder="Address" />

    <input required  class="form-control" type="text" name="longitude" placeholder="Longitude"  />

    <input required  class="form-control" type="text" name="latitude" placeholder="Latitude" /> 

    <input required  class="form-control" type="text" name="price_reduction" placeholder="Price reduction" />





    <input type="submit" class="action-button"
     value="Save" />
<br>
<h3 class="fs-subtitle2">Don't want to be here?</h3>
    <a href="index.php"><button class='action-button' type="button">Go home</button></a>

  </fieldset>
 
 
</form>

</body>
</html>