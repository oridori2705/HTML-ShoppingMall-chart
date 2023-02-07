<?php
    session_start();
	$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003") or die("connect failed");
    $prodid = $_COOKIE["productname"];

    $sql = "SELECT prodname, tag, price, image FROM product WHERE prodid = '$prodid'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
	$prodname = ($row['prodname']); 
	$tag = ($row['tag']);
    $price = ($row['price']); 
    $image = ($row['image']);
    setcookie("prodname",$prodname);
    setcookie("tag",$tag);
    setcookie("price",$price);
    setcookie("image",$image);
?>