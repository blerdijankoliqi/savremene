<?php 
include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepies | View </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/f97c14ef3e.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php foreach($query as $q){ ?>
    <div id="header-home" style="background-image:url('<?php echo $q['image'] ;?>') ;"> 
        <div id="main-nav">
                <h1 style="color: white;">AutoDiler</h1>
                <ul>
                    <li><a href="home.php" class="current">Home</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
            <div class="header-content blackBackground">
                <h1><?php echo $q['marka'];?></h1>
            </div>
    </div>
        <div class="container-fluid" style="background-color: black;">

       
        <div class="container" >
            


            

                <div class="text-center specs" >
                    <h1 class="mt-5 pt-5 text-white">Specifikacije automobila:   </h1>
                <div class="row mt-5 ">
                    <div class="col-12 col-md-4 border border-warning p-5">
                        <h2 class="lead font-weight-bold text-white text-strong">Tip automobila: <?php echo $q['tip'];?></h2>
                        <h2 class="lead font-weight-bold text-white text-strong">Godina proizvodnje: <?php echo $q['godina'];?></h2>
                        <h2 class="lead font-weight-bold text-white text-strong">kilometraza: <?php echo $q['kilometraza'];?></h2>
                        <h2 class="lead font-weight-bold text-white text-strong">Jačina motora: <?php echo $q['kilovat'];?></h2>
                    </div>
                     <div class="col-12 col-md-4 border border-warning p-5">
                         <h2 class="lead font-weight-bold text-white text-strong">Vrsta goriva: <?php echo $q['goriva'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Cijena automobila: <?php echo $q['cijena'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Vrsta mijenjača: <?php echo $q['menjac'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Država proizvodnje: <?php echo $q['drzava'];?></h2>

                    </div>
                     <div class="col-12 col-md-4 border border-warning p-5">
                         <h2 class="lead font-weight-bold text-white text-strong">Senzori za parkiranje: <?php echo $q['senzori_za_parkiranje'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Multifunkcionalni volan: <?php echo $q['volan'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Board kompijuter: <?php echo $q['board_computer'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Lane assisten: <?php echo $q['lane_asistent'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Self parking: <?php echo $q['self_parking'];?></h2>
                         <h2 class="lead font-weight-bold text-white text-strong">Autopilot: <?php echo $q['autopilot'];?></h2>
                         
                    </div>
                </div>
                <div class="d-flex">
                   
                </div>
                
                
                


                <a href="edit.php?id=<?php echo $q['id'];?>" class="mt-5 btn-light">Edit</a> 

                <form method="POST">
                    <input  type="text" hidden name="id" value=<?php echo $q['id'];?>>
                    <br>
                    <button name="delete_car" class="btn btn-dark mb-5">Delete</button>
                </form>
                

                
                
            </div>


            <?php }?>


        </div>
    </div>

    
</body>
</html>