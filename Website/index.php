<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/hero.css">

    <title>Home</title>
</head>

<body>
    <!-- NAVBAR -->

    <header></header>




    <!-- HERO -->

    <section></section>


    <!-- Content -->
    <?php 
    require_once 'components/db_connect.php';

    $query = "SELECT * FROM properties";
    $res = mysqli_query($connect, $query);
    $card = '';
    if(mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
            $card .= "
            <div class='col-sm-12 col-md-6 col-lg-4'>
            <div class='card'>
            <div class='card'>
  <img class='card-img-top'  style='height: 24rem;' src='../img/".$row['image']."' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>".$row['title']."</h5>
    <p class='card-text'>".$row['address']."</p>
    <p class='card-text'>".$row['city']."</p>
    <p class='card-text'>".$row['price']."</p>
    <a href='details.php?id=".$row['id']."' class='btn btn-primary'>Details</a>
  </div>
</div>
            </div>
            </div>
            ";
        } 
    } else {
        $card .= " <h1>No data available.</h1> ";
    }
    
    ?>;

        <div class="container text-center my-5 py-3">
        <h1>Available Housing for Sale</h1> 
        </div>
   
        <div id="housing" class="container housing">
            <div class="row g-4">
               
                <?= $card;?>
               
           </div>
       
   
<!-- Footer -->
<div class="my-3">
<footer></footer>
</div>

    <!-- fetching scripts -->

    <script src="JS/index.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <script>
      
    </script>

</body>

</html>