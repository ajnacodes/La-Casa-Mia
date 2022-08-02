<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/hero.css">
    <link rel="stylesheet" href="css/details.css">
    

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

    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        $query ="SELECT * FROM properties WHERE id = $_GET[id]";
        $res = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($res);
      
    }

    ?>;

        <div class="container text-center my-5">
        <h1 class="text-center"><?=$row["title"]?></h1>

        </div>
      
       
       

        <div class="container d-flex justify-content-center text-center mb-5">

        <div class="card cardSize">
          
                <img src="../img/<?=$row["image"]?>" class="card-img-top rounded-0 mt-2 imgSize" alt="<?=$row["title"]?>">
             
                <div class="card-body">
                    <p class="card-text">
                        <b>Details:</b> <br>
                        <?=$row["title"]?> in  <?=$row["city"]?>, 
                        with a size of 
                        <?=$row["size"]?> meters.
                        <br>
                        Contains  <?=$row["rooms_n"]?> rooms and is located in  <?=$row["address"]?>.
                    
                    </p>
                    <p class="card-text text-center"><b>Price:</b> <br> <?=$row["price"]?> EUR</p>
                    <a href="index.php" class="btn btn-outline-info">Go Back</a>
                </div>
            </div>
        </div>
    </div>
   
 <!-- Google map -->

 <div class="container d-flex justify-content-center my-5 ">
 <div  id="map"></div>
 </div>
 
<!-- Footer -->
<div class="my-5">
<footer></footer>
</div>

    <!-- fetching scripts -->


    <script src="JS/index.js"></script>


        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <!-- google apis -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    <script>
    //Google Maps Script
    let map;
    function initMap() {

        const place = {
            lat: <?=$row["latitude"]?>,  lng: <?=$row["longitude"]?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: place,
            disableDefaultUI: true,
        });
        var marker = new google.maps.Marker({
            position: place,
            map: map,
        });
    }

    // window.initMap = initMap;
</script>





    

</body>

</html>