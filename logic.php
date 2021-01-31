<?php

$conn = mysqli_connect('localhost','root','','savremene');


if(!$conn){
    echo "<h1>Ne radi</h1>";
}

$sql = "SELECT * FROM auto";
$query = mysqli_query($conn, $sql);


// Ovdje vidimo podatke koji je korisnik uneo, i onda za njega napravimo poseban id.

if(isset($_REQUEST['search_cars'])){

    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $drive = $_REQUEST['drive'];

    if($gender=='male' and $age == 1 and $drive==1){
       header("Location: auto.php?m11");
       exit();
        
    }elseif($gender=='male' and $age == 1 and $drive==2){
        header("Location: auto.php?m12");
        exit();

    }elseif($gender=='male' and $age == 1 and $drive==3){
        header("Location: auto.php?m13");
        exit();

    }elseif($gender=='male' and $age == 1 and $drive==4){
        header("Location: auto.php?m14");
        exit();

    }elseif($gender=='male' and $age == 1 and $drive==5){
        header("Location: auto.php?m15");
        exit();

    }elseif($gender=='male' and $age == 2 and $drive==1){
        header("Location: auto.php?m21");
        exit();

    }elseif($gender=='male' and $age == 2 and $drive==2){
        header("Location: auto.php?m22");
        exit();

    }elseif($gender=='male' and $age == 2 and $drive==3){
        header("Location: auto.php?m23");
        exit();

    }elseif($gender=='male' and $age == 2 and $drive==4){
        header("Location: auto.php?m24");
        exit();

    }elseif($gender=='male' and $age == 1 and $drive==5){
        header("Location: auto.php?m25");
        exit();

    }elseif($gender=='male' and $age == 3 and $drive==1){
        header("Location: auto.php?m31");
        exit();

    }elseif($gender=='male' and $age == 3 and $drive==2){
        header("Location: auto.php?m32");
        exit();

    }elseif($gender=='male' and $age == 3 and $drive==3){
        header("Location: auto.php?m33");
        exit();

    }elseif($gender=='male' and $age == 3 and $drive==4){
        header("Location: auto.php?m34");
        exit();

    }elseif($gender=='male' and $age == 3 and $drive==5){
        header("Location: auto.php?m35");
        exit();

    }elseif($gender=='male' and $age == 4 and $drive==1){
        header("Location: auto.php?m41");
        exit();

    }elseif($gender=='male' and $age == 4 and $drive==2){
        header("Location: auto.php?m42");
        exit();

    }elseif($gender=='male' and $age == 4 and $drive==3){
        header("Location: auto.php?m43");
        exit();

    }elseif($gender=='male' and $age == 4 and $drive==4){
        header("Location: auto.php?m44");
        exit();

    }elseif($gender=='male' and $age == 4 and $drive==5){
        header("Location: auto.php?m45");
        exit();

    }elseif($gender=='male' and $age == 5 and $drive==1){
        header("Location: auto.php?m51");
        exit();

    }elseif($gender=='male' and $age == 5 and $drive==2){
        header("Location: auto.php?m52");
        exit();

    }elseif($gender=='male' and $age == 5 and $drive==3){
        header("Location: auto.php?m53");
        exit();

    }elseif($gender=='male' and $age == 5 and $drive==4){
        header("Location: auto.php?m54");
        exit();

    }elseif($gender=='male' and $age == 5 and $drive==5){
        header("Location: auto.php?m55");
        exit();

    }elseif($gender=='male' and $age == 6 and $drive==1){
        header("Location: auto.php?m61");
        exit();

    }elseif($gender=='male' and $age == 6 and $drive==2){
        header("Location: auto.php?m62");
        exit();

    }elseif($gender=='male' and $age == 6 and $drive==3){
        header("Location: auto.php?m63");
        exit();

    }elseif($gender=='male' and $age == 6 and $drive==4){
        header("Location: auto.php?m64");
        exit();

    }elseif($gender=='male' and $age == 6 and $drive==5){
        header("Location: auto.php?m65");
        exit();

    }elseif($gender=='female' and $age == 1 and $drive==2){
        header("Location: auto.php?f12");
        exit();

    }elseif($gender=='female' and $age == 1 and $drive==3){
        header("Location: auto.php?f13");
        exit();

    }elseif($gender=='female' and $age == 1 and $drive==4){
        header("Location: auto.php?f14");
        exit();

    }elseif($gender=='female' and $age == 1 and $drive==5){
        header("Location: auto.php?f15");
        exit();

    }elseif($gender=='female' and $age == 2 and $drive==1){
        header("Location: auto.php?f21");
        exit();

    }elseif($gender=='female' and $age == 2 and $drive==2){
        header("Location: auto.php?f22");
        exit();

    }elseif($gender=='female' and $age == 2 and $drive==3){
        header("Location: auto.php?f23");
        exit();

    }elseif($gender=='female' and $age == 2 and $drive==4){
        header("Location: auto.php?f24");
        exit();

    }elseif($gender=='female' and $age == 2 and $drive==5){
        header("Location: auto.php?f25");
        exit();

    }elseif($gender=='female' and $age == 3 and $drive==1){
        header("Location: auto.php?f31");
        exit();

    }elseif($gender=='female' and $age == 3 and $drive==2){
        header("Location: auto.php?f32");
        exit();

    }elseif($gender=='female' and $age == 3 and $drive==3){
        header("Location: auto.php?f33");
        exit();

    }elseif($gender=='female' and $age == 3 and $drive==4){
        header("Location: auto.php?f34");
        exit();

    }elseif($gender=='female' and $age == 3 and $drive==5){
        header("Location: auto.php?f35");
        exit();

    }elseif($gender=='female' and $age == 4 and $drive==1){
        header("Location: auto.php?f41");
        exit();

    }elseif($gender=='female' and $age == 4 and $drive==2){
        header("Location: auto.php?f42");
        exit();

    }elseif($gender=='female' and $age == 4 and $drive==3){
        header("Location: auto.php?f43");
        exit();

    }elseif($gender=='female' and $age == 4 and $drive==4){
        header("Location: auto.php?f44");
        exit();

    }elseif($gender=='female' and $age == 4 and $drive==5){
        header("Location: auto.php?f45");
        exit();

    }elseif($gender=='female' and $age == 5 and $drive==1){
        header("Location: auto.php?f51");
        exit();

    }elseif($gender=='female' and $age == 5 and $drive==2){
        header("Location: auto.php?f52");
        exit();

    }elseif($gender=='female' and $age == 5 and $drive==3){
        header("Location: auto.php?f53");
        exit();

    }elseif($gender=='female' and $age == 5 and $drive==4){
        header("Location: auto.php?f54");
        exit();

    }elseif($gender=='female' and $age == 5 and $drive==5){
        header("Location: auto.php?f55");
        exit();

    }elseif($gender=='female' and $age == 6 and $drive==1){
        header("Location: auto.php?f61");
        exit();

    }elseif($gender=='female' and $age == 6 and $drive==2){
        header("Location: auto.php?f62");
        exit();

    }elseif($gender=='female' and $age == 6 and $drive==3){
        header("Location: auto.php?f63");
        exit();

    }elseif($gender=='female' and $age == 6 and $drive==4){
        header("Location: auto.php?f64");
        exit();

    }elseif($gender=='female' and $age == 6 and $drive==5){
        header("Location: auto.php?f65");
        exit();

    }elseif($gender=='female' and $age == 1 and $drive==1){
        header("Location: auto.php?f11");
        exit();

    }
}


//Kraj podakte od korisnika

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

    $sql = "SELECT * FROM auto WHERE id=$id";
    $query = mysqli_query($conn, $sql);
}

if(isset($_REQUEST['delete_car'])){
    
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM auto WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=deleted");
    exit();
}

if(isset($_REQUEST['update_car'])){
    $id = $_REQUEST['id'];
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

    $sql = "UPDATE auto SET marka='$marka', tip='$tip', godina=$godina, kilometraza=$kilometraza, kilovat = $kilovat, goriva='$goriva', cijena=$cijena, menjac='$menjac', drzava='$drzava', senzori_za_parkiranje = '$senzor_za_parkiranje', volan='$volan', board_computer='$board_computer', lane_asistent='$lane_asistent', self_parking='$self_parking', autopilot='$autopilot', image='$image' WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=updated");
    exit();
}






?>