<?php
    session_start();
	$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003");
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM orders WHERE custid = '$id' ORDER BY orders.orderid ASC";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo '<td>'.$row['orderid'].'</td>';
        echo '<td>'.$row['prodid'].'</td>';
        echo '<td>'.$row['custid'].'</td>';
        echo '<td>'.$row['count'].'</td>';
        echo '<td>'.$row['price'].'</td>';
        echo '<td>'.$row['orderDT'].'</td>';
        echo '<td>'.$row['size'].'</td>';
        echo '<td>'.$row['starpoint'].'</td>';
        echo '<td>'.$row['review'].'</td>';
        echo "</tr>";
    }
    
?>