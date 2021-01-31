<?php 
include "logic.php";
?>

<?php 

// ovdje vidimo koje auto da mu damo
    if (isset($_REQUEST['m11'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<3000 OR tip='hatchback' AND cijena<3000) OR (goriva='electric' AND tip='sportski' OR tip='hatchback' AND cijena<3001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m12'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<6001 OR tip='hatchback' AND cijena<6001) OR (goriva='electric' AND tip='sportski' OR tip='hatchback' AND cijena<6001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m13'])){
        $sql = "SELECT * FROM auto WHERE (tip='sporski' AND cijena<10001 OR tip='hatchback' AND cijena<10001) OR (goriva='electric' AND tip='sportski' OR tip='hatchback' AND cijena<10001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m14'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<20001 OR tip='hatchback' AND cijena<20001) OR (goriva='electric' AND tip='sportski' OR tip='hatchback' AND cijena<20001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m15'])){
        $sql = "SELECT * FROM auto WHERE tip='sportski' OR tip='hatchback' OR goriva='electric' AND tip='sportski' OR goriva='electric' AND tip='hatchback'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m21'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<3001 OR tip='sedan' AND cijena<3001 OR tip='cabriolet' AND cijena<3001 OR tip='hatchback' AND cijena<3001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m22'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<6001 OR tip='sedan' AND cijena<6001 OR tip='cabriolet' AND cijena<6001 OR tip='hatchback' AND cijena<6001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m23'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<10001 OR tip='sedan' AND cijena<10001 OR tip='cabriolet' AND cijena<10001 OR tip='hatchback' AND cijena<10001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m24'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' AND cijena<20001 OR tip='sedan' AND cijena<20001 OR tip='cabriolet' AND cijena<20001 OR tip='hatchback' AND cijena<20001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m25'])){
        $sql = "SELECT * FROM auto WHERE (tip='sportski' OR tip='sedan' OR tip='cabriolet' OR tip='hatchback')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m31'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<3001 OR tip='sedan' AND cijena<3001 OR tip='karavan' AND cijena<3001 OR tip='hatchback' AND cijena<3001)";
        $query1 = mysqli_query($conn, $sql);
        

    }elseif(isset($_REQUEST['m32'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<6001 OR tip='sedan' AND cijena<6001 OR tip='karavan' AND cijena<6001 OR tip='hatchback' AND cijena<6001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m33'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<10001 OR tip='sedan' AND cijena<10001 OR tip='karavan' AND cijena<10001 OR tip='hatchback' AND cijena<10001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m34'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<20001 OR tip='sedan' AND cijena<20001 OR tip='karavan' AND cijena<20001 OR tip='hatchback' AND cijena<20001)";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m35'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' OR tip='sedan' OR tip='karavan'  OR tip='hatchback')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m41'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<3001 OR tip='minivan' AND cijena<3001 OR tip='karavan' AND cijena<3001 )";
        $query1 = mysqli_query($conn, $sql);

       

    }elseif(isset($_REQUEST['m42'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<6001 OR tip='minivan' AND cijena<6001 OR tip='karavan' AND cijena<6001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m43'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<10001 OR tip='minivan' AND cijena<10001 OR tip='karavan' AND cijena<10001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m44'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' AND cijena<20001 OR tip='minivan' AND cijena<20001 OR tip='karavan' AND cijena<20001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m45'])){
        $sql = "SELECT * FROM auto WHERE (tip='suv' OR tip='minivan' OR tip='karavan')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m51'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m52'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m53'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m54'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m55'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m61'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m62'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m63'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m64'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['m65'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f11'])){
        $sql = "SELECT * FROM auto WHERE (tip='sedan' AND cijena<3001 OR tip='cabriolet' AND cijena<3001 OR tip='sportski' AND cijena<3001 )";
        $query1 = mysqli_query($conn, $sql);
        

    }elseif(isset($_REQUEST['f12'])){
        $sql = "SELECT * FROM auto WHERE (tip='sedan' AND cijena<6001 OR tip='cabriolet' AND cijena<6001 OR tip='sportski' AND cijena<6001 )";
        $query1 = mysqli_query($conn, $sql);
       

    }elseif(isset($_REQUEST['f13'])){
        $sql = "SELECT * FROM auto WHERE (tip='sedan' AND cijena<10001 OR tip='cabriolet' AND cijena<10001 OR tip='sportski' AND cijena<10001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f14'])){
        $sql = "SELECT * FROM auto WHERE (tip='sedan' AND cijena<20001 OR tip='cabriolet' AND cijena<20001 OR tip='sportski' AND cijena<20001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f15'])){
        $sql = "SELECT * FROM auto WHERE (tip='sedan' OR tip='cabriolet' OR tip='sportski')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f21'])){
        $sql = "SELECT * FROM auto WHERE (tip='coupe' AND cijena<3001 OR tip='cabriolet' AND cijena<3001 OR tip='minivan' AND cijena<3001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f22'])){
        $sql = "SELECT * FROM auto WHERE (tip='coupe' AND cijena<6001 OR tip='cabriolet' AND cijena<6001 OR tip='minivan' AND cijena<6001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f23'])){
        $sql = "SELECT * FROM auto WHERE (tip='coupe' AND cijena<10001 OR tip='cabriolet' AND cijena<10001 OR tip='minivan' AND cijena<10001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f24'])){
        $sql = "SELECT * FROM auto WHERE (tip='coupe' AND cijena<20001 OR tip='cabriolet' AND cijena<20001 OR tip='minivan' AND cijena<20001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f25'])){
        $sql = "SELECT * FROM auto WHERE (tip='coupe' OR tip='cabriolet' OR tip='minivan')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f31'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<3001 OR tip='sedan' AND cijena<3001 OR tip='suv' AND cijena<3001 OR tip='minivan' AND cijena<3001 )";
        $query1 = mysqli_query($conn, $sql);
        //dodaj u bazu

    }elseif(isset($_REQUEST['f32'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<6001 OR tip='sedan' AND cijena<6001 OR tip='suv' AND cijena<6001 OR tip='minivan' AND cijena<6001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f33'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<10001 OR tip='sedan' AND cijena<10001 OR tip='suv' AND cijena<10001 OR tip='minivan' AND cijena<10001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f34'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<20001 OR tip='sedan' AND cijena<20001 OR tip='suv' AND cijena<20001 OR tip='minivan' AND cijena<20001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f35'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' OR tip='sedan' OR tip='suv'  OR tip='minivan')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f41'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<3001 OR tip='sedan' AND cijena<3001 OR tip='minivan' AND cijena<3001 )";
        $query1 = mysqli_query($conn, $sql);
        //dodaj u bazu

    }elseif(isset($_REQUEST['f42'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<6001 OR tip='sedan' AND cijena<6001 OR tip='minivan' AND cijena<6001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f43'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<10001 OR tip='sedan' AND cijena<10001 OR tip='minivan' AND cijena<10001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f44'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' AND cijena<20001 OR tip='sedan' AND cijena<20001 OR tip='minivan' AND cijena<20001 )";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f45'])){
        $sql = "SELECT * FROM auto WHERE (tip='hatchback' OR tip='sedan' OR tip='minivan')";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f51'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f52'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f53'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f54'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f55'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f61'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f62'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f63'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f64'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }elseif(isset($_REQUEST['f65'])){
        $sql = "SELECT * FROM auto WHERE volan='nema'";
        $query1 = mysqli_query($conn, $sql);

    }


// kraj

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepies</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                    <li><a href="home.php"  class="current">Home</a></li>
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

                    <div class="myItem">
                        <div class="item-img">
                            <img src="<?php echo $q["image"];?>" alt="item1">
                        </div>
                            <div class="item-text-wrap myWrap">
                                <div class="d-flex myItemText">
                                <p class="mt-1 mr-2">Marka automobila: </p>
                                <p class="item-text-category"><?php echo $q["marka"];?> </p>
                                </div>
                                 <div class="d-flex myItemText">
                                <p class="mt-1 mr-2">Tip automobila: </p>
                                <p class="item-text-category"><?php echo $q["tip"];?></p>                               
                                 </div>
                                 <div class="d-flex myItemText">
                                <p class="mt-1 mr-2">Cijena automobila: </p>
                                <p class="item-text-category text-strong"><?php echo $q["cijena"];?></p>
                                 </div>
                                                              
                                <h2 class="item-text-title"><?php$q["marka"];?></h2>
                                <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-dark">View</a>
                            </div>
                        
                    </div>


                   <?php } ?>
                   
                </div>
            </div>
        </div>

        

        

    </div>
 

  
</body>
</html>