<?php
session_start();
$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003") or die("connect failed");


$sql1 = "SELECT * FROM orders";
$result1 = mysqli_query($conn, $sql1);
$totRows = mysqli_num_rows($result1);

echo  $totRows;
$totRows=++$totRows;

$prodid = $_SESSION['prodid'];
$id = $_SESSION['userid'];
$date = date("Y-m-d", time());
$orderdt= date("md",time());
$orderid=$orderdt.$totRows; 

$prodid=isset($_POST['prodid1']) ? $_POST['prodid1'] : '';
$price=isset($_POST['price']) ? $_POST['price'] : '';
$size=isset($_POST['size']) ? $_POST['size'] : '';
$count=isset($_POST['amount']) ? $_POST['amount'] : '';

echo $orderid;
echo $prodid;
echo $id;
echo $price;
echo $size;
echo $count;

$sql = "
    INSERT INTO orders
    (orderid, prodid, custid, count, price, orderDT, size)
    VALUES('$orderid', '$prodid','$id','$count','$price','$date','$size'   
    )";
$result = mysqli_query($conn, $sql);
echo $result;

if ($result === false) {
    echo "구매에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("구매가 완료되었습니다");
        history.back();
    </script>
<?php
}
?>
