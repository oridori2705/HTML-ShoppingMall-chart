<?php
session_start();
$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003") or die("connect failed");
$id = $_SESSION['userid'];

$sql = "DELETE FROM customer WHERE custid = '$id'";
$result = mysqli_query($conn, $sql);
echo $result;
echo $sql;
echo $id;
if ($result === false) {
    echo "탈퇴에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("탈퇴가 완료되었습니다");
        location.href = "beforeLoginMain.php";
    </script>
<?php
}
?>
   
