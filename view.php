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
                <img src="logo.png" alt="My Logo" id="logo">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="recepte.php" class="current">Recepies</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>


            <?php foreach($query as $q){ ?>

                <div class="header-content">
                <h1><?php echo $q['name'];?></h1>
                <p class="lead">You will need: <?php echo $q['ingridients'];?></p>
                <p class="lead"><?php echo $q['time'];?> to make this <?php echo $q['cousine'];?> dish.</p>
                <a href="edit.php?id=<?php echo $q['id'];?>" class="btn-light">Edit</a> 

                <form method="POST">
                    <input type="text" hidden name="id" value=<?php echo $q['id'];?>>
                    <br>
                    <button name="delete_recepie" class="btn btn-dark">Delete</button>
                </form>
                

                
                
            </div>


            <?php }?>


        </div>
    </div>

    

    <footer class="footer">
        <div class="footer-left">
            <img src="#" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae fugit distinctio tempora voluptatum iusto ab sunt vel perspiciatis tenetur, exercitationem voluptas labore nihil iure accusamus!</p>
            <div class="socials">
                <a href="#"><i class="fas fa-arrow-up"></i></a>
                <a href="#"><i class="fas fa-arrow-up"></i></a>
                <a href="#"><i class="fas fa-arrow-up"></i></a>
                <a href="#"><i class="fas fa-arrow-up"></i></a>
                <a href="#"><i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2>Cousine</h2>
                <ul class="box">
                    <li><a href="recepte.php?cousine=Mexican">Mexican</a></li>
                    <li><a href="recepte.php?cousine=Italian">Italian</a></li>
                    <li><a href="recepte.php?cousine=Asian">Asian</a></li>
                    <li><a href="recepte.php?cousine=Balkan">Balkan</a></li> 
                </ul>
            </li>

            <li class="features">
                <h2>Useful Links</h2>
                <ul class="box">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="recepte.php">Recepies</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="create.php">Create</a></li>
                </ul>
            </li>

            <li>
                <h2>Address</h2>
                <ul class="box">
                    <li><a href="#">85306</a></li>
                    <li><a href="#">Vukasina Markovica</a></li>
                    <li><a href="#">Podgorica</a></li>
                    <li><a href="#">Montenegro</a></li>
                </ul>
            </li>
        </ul>

        <div class="footer-bottom">
            <p>All Rights reserved by &copy; Blerdijan 2021</p>
        </div>
    </footer>
    
    <a href="#" class="gototop"> <i class="fas fa-arrow-up"></i> </a>
    
    
</body>
</html>