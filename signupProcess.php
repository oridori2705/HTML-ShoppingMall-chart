<?php
$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003") or die("connect failed");
mysqli_set_charset('utf8',$conn);
//$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
#echo $hashedPassword;
$sql = "
    INSERT INTO customer
    (custid, custpw, name, dayofbirth, sex, height, weight, address, phone, major, mbti, area)
    VALUES('{$_POST['id']}','{$_POST['password']}','{$_POST['username']}','{$_POST['dayofbirth']}','{$_POST['sex']}','{$_POST['height']}',
    '{$_POST['weight']}','{$_POST['address']}','{$_POST['phone']}','{$_POST['major']}','{$_POST['mbti']}','{$_POST['area']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "login2.php";
    </script>
<?php
}
?>