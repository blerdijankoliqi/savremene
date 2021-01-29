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
                <img src="logo.png" alt="My Logo" id="logo"> 
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="recepte.php" class="current">Recepies</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
            <p class="lead">Update a Recepie into the Database</p>
            <?php foreach($query as $q){ ?>

                <form method="GET" data-netlify="true" name="contact" data-netlify-recaptcha="true">
                <div class="areas">
                    <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                    <input type="text" placeholder="Name" name="name" value="<?php echo $q['name'];?>">
                    <input type="text" placeholder="Ingridients" name="ingridients" value="<?php echo $q['ingridients'];?>">
                    <input type="text" placeholder="Time needed" name="time" value="<?php echo $q['time'];?>">
                    <select name="cousine">
                        <option value="Mexican">Mexican</option>
                        <option value="Italian">Italian</option>
                        <option value="Asian">Asian</option>
                        <option value="Balkan">Balkan</option>
                    </select>
                    <input type="text" placeholder="Food image URL" name="url" value="<?php echo $q['url'];?>">
                    
                </div>
                <div class="my-2">
                    <div data-netlify-recaptcha="true"></div>
                </div>
                <input type="submit" name="update_recepie" class="btn-dark">

            </form>

            <?php } ?>

            
        </div>
    </div>
    
    <div class="contact-c text-center bg-main py-4">
        <div class="container">
            <h1 style="color: #fff;">Update a Recepie</h1>
        </div>
    </div>
    <a href="#" class="gototop"> <i class="fas fa-arrow-up"></i> </a>
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
</body>
</html>