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
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/f97c14ef3e.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="header-home">
        <div class="container">
            <div id="main-nav">
                <h1 style="color: white;">AutoDiler</h1>
                <ul>
                    <li><a href="home.php" class="current">Home</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>


            <?php foreach($query as $q){ ?>

                <div class="header-content">
                <h1><?php echo $q['marka'];?></h1>
                <p class="lead"><?php echo $q['tip'];?></p>
                <p class="lead"><?php echo $q['godina'];?></p>
                <p class="lead"><?php echo $q['kilometraza'];?></p>
                <p class="lead"><?php echo $q['kilovat'];?></p>
                <p class="lead"><?php echo $q['goriva'];?></p>
                <p class="lead"><?php echo $q['cijena'];?></p>
                <p class="lead"><?php echo $q['menjac'];?></p>
                <p class="lead"><?php echo $q['drzava'];?></p>
                <p class="lead"><?php echo $q['senzori_za_parkiranje'];?></p>
                <p class="lead"><?php echo $q['volan'];?></p>
                <p class="lead"><?php echo $q['board_computer'];?></p>
                <p class="lead"><?php echo $q['lane_asistent'];?></p>
                <p class="lead"><?php echo $q['self_parking'];?></p>
                <p class="lead"><?php echo $q['autopilot'];?></p>


                <a href="edit.php?id=<?php echo $q['id'];?>" class="btn-light">Edit</a> 

                <form method="POST">
                    <input type="text" hidden name="id" value=<?php echo $q['id'];?>>
                    <br>
                    <button name="delete_car" class="btn btn-dark">Delete</button>
                </form>
                

                
                
            </div>


            <?php }?>


        </div>
    </div>

    
</body>
</html>