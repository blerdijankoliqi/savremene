<?php

$conn = mysqli_connect('localhost','root','','savremene');


if(!$conn){
    echo "<h1>Ne radi</h1>";
}



if(isset($_REQUEST['search_cars'])){

    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $drive = $_REQUEST['drive'];

    if($age == 1){
     
       header("Location: auto.php?a1");
       exit();
     
        
    }elseif($age == 2){
        header("Location: auto.php?a2");
        exit();
    }
}






if(isset($_REQUEST['create_car'])){
    $marka = $_REQUEST['marka'];
    $tip = $_REQUEST['tip'];
    $godina = $_REQUEST['godina'];
    $kilometraza = $_REQUEST['kilometraza'];
    $kilovat = $_REQUEST['kilovat'];
    $cijena = $_REQUEST['cijena'];
    $drzava = $_REQUEST['drzava'];
    $image = $_REQUEST['image'];
    $goriva = $_REQUEST['goriva'];
    $menjac = $_REQUEST['menjac'];
    $senzor_za_parkiranje = $_REQUEST['senzor_za_parkiranje'];
    $volan = $_REQUEST['volan'];
    $board_computer = $_REQUEST['board_computer'];
    $lane_asistent = $_REQUEST['lane_asistent'];
    $self_parking = $_REQUEST['self_parking'];
    $autopilot = $_REQUEST['autopilot'];

    $sql = "INSERT INTO auto(marka,tip,godina,kilometraza,kilovat,goriva,cijena,menjac,drzava,senzori_za_parkiranje,volan,board_computer,lane_asistent,self_parking,autopilot,image) VALUES ('$marka','$tip',$godina,$kilometraza,$kilovat,'$goriva',$cijena,'$menjac','$drzava','$senzor_za_parkiranje','$volan','$board_computer','$lane_asistent','$self_parking','$autopilot','$image')";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=created");
    exit();
}

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM recepte WHERE id=$id";
    $query = mysqli_query($conn, $sql);
}

if(isset($_REQUEST['delete_recepie'])){
    
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM recepte WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=deleted");
    exit();
}

if(isset($_REQUEST['update_recepie'])){
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $ingridients = $_REQUEST['ingridients'];
    $time = $_REQUEST['time'];
    $cousine = $_REQUEST['cousine'];
    $url = $_REQUEST['url'];

    $sql = "UPDATE recepte SET name='$name', ingridients='$ingridients', time='$time', cousine='$cousine', url = '$url' WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=updated");
    exit();
}

if(isset($_REQUEST['cousine'])){
    $cousine = $_REQUEST['cousine'];

    $sql = "SELECT * FROM recepte WHERE cousine='$cousine'";
    $query = mysqli_query($conn, $sql);
}




?>