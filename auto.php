<?php 
include "logic.php";
?>

<?php 

    if (isset($_REQUEST['a1'])){
        $sql = "SELECT * FROM auto WHERE tip='sportski'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['a2'])){
        $sql = "SELECT * FROM auto WHERE tip='suv' OR tip='sportski'";
        $query1 = mysqli_query($conn, $sql);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepies</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="header-inner">
        <div class="container">
            <div id="main-nav">
                <h1 style="color: white;">AutoDiler</h1>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="auto.php" class="current">Auto</a></li>
                  
                    <li><a href="create.php">Create</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="work-a text-center py-3">
        <div class="container">
        <h2 class="section-title">Welcome</h2>
            <div class="bottom-line"></div>

           
            
            <div class="about-info">
                <div class="items my-1">

                


                

                   <?php foreach($query1 as $q){ ?>

                    <div class="item">
                        <div class="item-img">
                            <img src="<?php echo $q["image"];?>" alt="item1">
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category"><?php echo $q["menjac"];?> </p>
                                <p class="item-text-category"><?php echo $q["tip"];?></p>
                                <p class="item-text-category"><?php echo $q["cijena"];?></p>
                                <h2 class="item-text-title"><?php$q["marka"];?></h2>
                                <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-dark">View</a>
                            </div>
                        </div>
                    </div>


                   <?php } ?>
                   
                </div>
            </div>
        </div>

        

        

    </div>
 

  
</body>
</html>