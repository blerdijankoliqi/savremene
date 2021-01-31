<?php 
include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepies | Edit </title>
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
                    <li><a href="home.php" class="current">Home</a></li>
                    <li><a href="create.php" >Create</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-a text-center py-2">
        <div class="container">
            <h2 class="section-title">Edit</h2>
            <div class="bottom-line"></div>
            <p class="lead">Update a Car into the Database</p>

            <?php foreach($query as $q){ ?>

                <form method="GET" data-netlify="true" name="contact" data-netlify-recaptcha="true">
                <div class="areas">


                    <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                    <input type="text" placeholder="Marka" name="marka" value="<?php echo $q['marka'];?>">
                    <select name="tip">
                        <option value="sedan">Sedan</option>
                        <option value="cabriolet">Cabriolet</option>
                        <option value="karavan">Karavan</option>
                        <option value="suv">SUV</option>
                        <option value="coupe">Coupe</option>
                        <option value="minivan">Mini Van</option>
                        <option value="sportski">Sportski</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="kamionet">Kamionet</option>
                    </select>
                    <input type="text" placeholder="Godina" name="godina" value="<?php echo $q['godina'];?>">
                    <input type="text" placeholder="Kilometraza" name="kilometraza" value="<?php echo $q['kilometraza'];?>">
                    <input type="text" placeholder="Kilovat" name="kilovat" value="<?php echo $q['kilovat'];?>">
                    <input type="text" placeholder="Cijena" name="cijena" value="<?php echo $q['cijena'];?>">
                    <input type="text" placeholder="Drzava" name="drzava" value="<?php echo $q['drzava'];?>">
                    <input type="text" placeholder="Image URL" name="image" value="<?php echo $q['image'];?>">
                    
                    <h3 for="goriva">Gorivo</h3>
                    <select name="goriva">
                        <option value="diesel">Diesel</option>
                        <option value="benzin">Benzin</option>
                        <option value="electric">Electric</option>
                    </select>

                    <h3 for="menjac">Menjac</h3>
                    <select name="menjac">
                        <option value="automatic">Automatic</option>
                        <option value="manual">Manua</option>
                    </select>

                    <h3 for="senzor_za_parkiranje">Senzor za parkiranje</h3>
                    <select name="senzor_za_parkiranje">
                        <option value="ima">Ima</option>
                        <option value="nema">Nema</option>
                    </select>

                    <h3 for="volan">Multifunkcijonalni Volan</h3>
                    <select name="volan">
                        <option value="ima">Ima</option>
                        <option value="nema">Nema</option>
                    </select>

                    <h3 for="board_computer">Board Computer</h3>
                    <select name="board_computer">
                        <option value="ima">Ima</option>
                        <option value="nema">Nema</option>
                    </select>

                    <h3 for="lane_asistent">Lane Assistent</h3>
                    <select name="lane_asistent">
                        <option value="ima">Ima</option>
                        <option value="nema">Nema</option>
                    </select>

                    <h3 for="self_parking">Self Parking</h3>
                    <select name="self_parking">
                        <option value="ima">Ima</option>
                        <option value="nema">Nema</option>
                    </select>

                    <h3 for="autopilot">Autopilot</h3>
                    <select name="autopilot">
                        <option value="ima">Ima</option>
                        <option value="nema">Nema</option>
                    </select>
                   
                    
                    
                    
                </div>
                <div class="my-2">
                    <div data-netlify-recaptcha="true"></div>
                </div>
                <input type="submit" name="update_car" class="btn-dark">

                </form>

            <?php } ?>

            
        </div>
    </div>
    
    <div class="contact-c text-center bg-main py-4">
        <div class="container">
            <h1 style="color: #fff;">Update a Car</h1>
        </div>
    </div>
   
</body>
</html>