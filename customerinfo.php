<?php
    session_start();
    
	$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003");
    header("Content-Type: application/json");
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM customer WHERE custid = '$id'";
    $result = mysqli_query($conn, $sql);

    $custid = array();
    $custpw = array();
    $name = array();
    $dayofbirth = array();
    $sex = array();
    $height = array();
    $weight = array();
    $phone = array();
    $major = array();
    $mbti = array();
    $area = array();
    $address = array();
    
    while($row = mysqli_fetch_array($result)) {
        
        array_push($custid, $row['custid']);
        array_push($custpw, $row['custpw']);
        array_push($name, $row['name']);
        array_push($dayofbirth, $row['dayofbirth']);
        array_push($sex, $row['sex']);
        array_push($height, $row['height']);
        array_push($weight, $row['weight']);
        array_push($phone, $row['phone']);
        array_push($major, $row['major']);
        array_push($mbti, $row['mbti']);
        array_push($area, $row['area']);
        array_push($address, $row['address']);

    }
    echo(json_encode(array("mode" => $_REQUEST['mode'], "custid" => $custid, "custpw" => $custpw, "name" => $name, "dayofbirth" => $dayofbirth, "sex" => $sex, "height" => $height, "weight" => $weight
    , "phone" => $phone, "major" => $major, "mbti" => $mbti, "area" => $area, "address" => $address)))
    
?>