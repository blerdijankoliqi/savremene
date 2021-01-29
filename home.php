<?php 
include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <h1>AutoDiler</h1>
                <ul>
                    <li><a href="home.php" class="current">Home</a></li>
                    <li><a href="auto.php">Auto</a></li>
                    
                    <li><a href="create.php">Create</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
            <div class="header-content">
            <div class="contact-a text-center py-2">
        <div class="container">
            <h2 class="section-title">Find your DREAM CAR</h2>
            <div class="bottom-line"></div>
            <p class="lead">Fill the form and we do the rest!</p>
            <form method="GET" data-netlify="true" name="contact" data-netlify-recaptcha="true">
                <div class="areas">
                   
                 
                <label for="gender">Gender</label>
                    <select name="gender">
                        <option value="male">Musko</option>
                        <option value="female">Zensko</option>
                    </select>
                    
                    <label for="age">Age</label>
                    <select name="age">
                        <option value="1">18-24</option>
                        <option value="2">25-34</option>
                        <option value="3">35-44</option>
                        <option value="4">45-54</option>
                        <option value="5">55-64</option>
                        <option value="6">65+</option>
                    </select>

                    <label for="drive">Driver experienc in years</label>
                    <select name="drive">
                        <option value="1">0-2</option>
                        <option value="2">2-5</option>
                        <option value="3">5-10</option>
                        <option value="4">10+</option>
                    </select>
                    
                </div>
                <div class="my-2">
                    <div data-netlify-recaptcha="true"></div>
                </div>
                <input type="submit" name="search_cars" class="btn-dark">

            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
   
    
    <script src="carosel.js"></script>
</body>
</html>