<?php
session_start();
$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003") or die("connect failed");
$starpoint = $_POST['starpoint'];
$review = $_POST['review'];
$id = $_POST['id'];
$orderid = $_POST['orderid'];
$userid = $_SESSION['userid'];

if($starpoint<1 && $starpoint>5 && $userid = $id)
{
    echo "별점이 이상해요 다시 입력해주세요.";
    ?>
    <script>
        location.href = "review.php";
    </script>
    <?php
}

$sql = "UPDATE orders SET starpoint = '$starpoint', review =  '$review' 
			WHERE custid = '$userid' AND orderid = '$orderid'";
$result = mysqli_query($conn, $sql);


if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("리뷰 등록이 완료되었습니다");
        location.href = "afterLoginMain.php";
    </script>
<?php
}
?>