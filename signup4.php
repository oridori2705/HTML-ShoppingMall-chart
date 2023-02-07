<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>

<body>
    <form action="signupProcess.php" method="POST" id="signup-form">
        <div class="w-50 ml-auto mr-auto mt-5">

            
            <div class="mb-3 ">
                <label for="id" class="form-label">아이디</label>
                <input type="text" name="id" class="form-control" id="id" placeholder="아이디를 입력해 주세요.">
            </div>

            <div class="mb-3 ">
                <label for="username" class="form-label">이름</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="이름을 입력해 주세요.">
            </div>

            <div class="mb-3 ">
                <label for="password" class="form-label">비밀번호</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="비밀번호를 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="passwordCheck" class="form-label">비밀번호 체크</label>
                <input type="password" class="form-control" id="password-check" placeholder="비밀번호를 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="dayofbirth" class="form-label">생년월일</label>
                <input type="text" name="dayofbirth" class="form-control" id="dayofbirth" placeholder="생년월일을 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="phone" class="form-label">전화번호</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="전화번호를 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="text" class="form-label">성별</label>
                <select name="sex">
                <option value="">성별</option>
                <option value="남">남</option>
                <option value="여">여</option></select>
            </div>
            <div class="mb-3 ">
                <label for="height" class="form-label">키</label>
                <input type="number" name="height" class="form-control" id="height" placeholder="키를 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="weight" class="form-label">몸무게</label>
                <input type="number" name="weight" class="form-control" id="weight" placeholder="몸무게를 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="address" class="form-label">주소</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="주소를 입력해 주세요.">
            </div>
            <div class="mb-3 ">
                <label for="major" class="form-label">전공</label>
                <select name="major">
                <option value="">전공</option>
                <option value="컴퓨터공학부">컴퓨터공학부</option>
                <option value="전기전자제어공학부">전기전자제어공학부</option>
				<option value="정보통신공학부">정보통신공학부</option>
				<option value="건축학부">건축학부</option>
				<option value="화학공학부">화학공학부</option>
				<option value="신소재공학부">신소재공학부</option>
				<option value="산업디자인공학부">산업디자인공학부</option>
				</select>
            </div>
            <div class="mb-3 ">
                <label for="mbti" class="form-label">MBTI</label>
                <select name="mbti">
                <option value="">mbti</option>
                <option value="ISTJ">ISTJ</option>
                <option value="ISFJ">ISFJ</option>
                <option value="INFJ">INFJ</option>
                <option value="INTJ">INTJ</option>
                <option value="ISTP">ISTP</option>
                <option value="ISFP">ISFP</option>
                <option value="INFP">INFP</option>
                <option value="INTP">INTP</option>
                <option value="ESTP">ESTP</option>
                <option value="ESFP">ESFP</option>
                <option value="ENFP">ENFP</option>
                <option value="ENTP">ENTP</option>
                <option value="ESTJ">ESTJ</option>
                <option value="ESFJ">ESFJ</option>
                <option value="ENFJ">ENFJ</option>
                <option value="ENTJ">ENTJ</option></select>
            </div>
            <div class="mb-3 ">
                <label for="area" class="form-label">도</label>
                <select name="area">
                <option value="">도</option>
                <option value="서울">서울</option>
                <option value="경기도">경기도</option>
				<option value="인천">인천</option>
                <option value="충청도">충청도</option>
                <option value="강원도">강원도</option>
                <option value="전라도">전라도</option>
                <option value="경상도">경상도</option></select>
            </div>

            <button type="button" id="signup-button" class="btn btn-primary mb-3">회원가입</button>
        </div>
    </form>
    <script>
        const signupForm = document.querySelector("#signup-form");
        const signupButton = document.querySelector("#signup-button");
        const password = document.querySelector("#password");
        const passwordCheck = document.querySelector("#password-check");
        signupButton.addEventListener("click", function(e) {
            if(password.value&& password.value === passwordCheck.value){
                
            signupForm.submit();
            }else{
                alert("비밀번호가 서로 일치하지 않습니다");
            }
        });
    </script>
</body>

</html>