<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <title>회원가입</title>
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>
<section class="signup">
    <!--로그인 로고-->
    <div class="signup_logo">
        <Strong><a class="signup_logo_link" href="/index.php">토성마을</a></Strong>
    </div>

    <form name="register" action="register-member.php" method="post" class="signup-form" onsubmit="return checkInput()">
        <!-- signup input -->
        <div class="signup_input">
            <div class="signup_id">
                <!--input id에 대해 label을 적용합니다.-->
                <label for="id_input" class="form-label">ID *</label>
                <div class="input-group mb-3">
                    <!--                    중복확인 눌렀을 때 name= id 변수에 input value가 들어간 채로 중복확인 페이지로 전달-->
                    <input type="text" class="form-control" name="id" id="id_input"
                           placeholder="아이디">
                    <button class="btn btn-outline-secondary" type="button" id="checkIDButton">중복
                        확인
                    </button>
                </div>
                <small class="text-muted" id="id_valid">
                    사용가능한 아이디입니다.
                </small>
            </div>

            <div class="signup_password">
                <label for="pw_input" class="form-label">Password *</label>
                <input type="password" class="form-control" name="pw" id="pw_input"
                       placeholder="비밀번호">
            </div>

            <div class="signup_confirm_password">
                <label for="pw_conf_input" class="form-label">Password Confirm *</label>
                <input type="password" class="form-control" name="pw_conf" id="pw_conf_input" placeholder="비밀번호 확인">
            </div>

            <div class="form-group">
                <label for="email_input" class="form-label">Email *</label>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" id="email_input" placeholder="이메일을 입력해주세요.">
                    <button class="btn btn-outline-secondary" type="button" id="checkEmailButton">중복 확인</button>
                </div>
                <small class="text-muted" id="email_valid">
                    사용가능한 이메일입니다.
                </small>
            </div>

            <div class="signup_name">
                <!--input id에 대해 label을 적용합니다.-->
                <label for="name_input" class="form-label">Name *</label>
                <input type="text" class="form-control" name="name" id="name_input" placeholder="이름">
            </div>

            <div class="signup_nickname">
                <!--input id에 대해 label을 적용합니다.-->
                <label for="nickname_input" class="form-label">Nick Name *</label>
                <div class="input-group mb-3">
                    <!--                    중복확인 눌렀을 때 name= id 변수에 input value가 들어간 채로 중복확인 페이지로 전달-->
                    <input type="text" class="form-control" name="nickname" id="nickname_input"
                           placeholder="닉네임">
                    <button class="btn btn-outline-secondary" type="button" id="checkNickButton">중복
                        확인
                    </button>
                </div>
                <small class="text-muted" id="nickname_valid">
                    사용가능한 닉네임입니다.
                </small>
            </div>

            <div class="form-group">
                <label for="question">질문 선택 *</label>
                <select class="form-control" id="question_input" name="question">
                    <option>가장 인상깊게 읽었던 책 이름은?</option>
                    <option>내가 좋아하는 캐릭터는?</option>
                    <option>다시 태어나면 되고싶은 것은?</option>
                    <option>자신의 보물 제 1호는?</option>
                    <option>자신의 인생 좌우명은?</option>
                </select>
            </div>

            <div class="form-group">
                <label for="answer_input">답변 *</label>
                <input type="text" class="form-control" id="answer_input" name= "answer" placeholder="답변">
            </div>

        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <input class="btn btn-primary" type="submit" value="회원가입">
        </div>

    </form>

</section>

<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery-1.11.0.min.js"></script>

<script>
    const checkIdButton = document.getElementById("checkIDButton");
    const checkNickButton = document.getElementById("checkNickButton");
    const checkEmailButton = document.getElementById("checkEmailButton");

    const idInput = document.getElementById("id_input");
    const nickInput = document.getElementById("nickname_input");
    const emailInput = document.getElementById("email_input");
    const questionInput = document.getElementById("question_input");
    const answerInput = document.getElementById("answer_input");
    const pwInput = document.getElementById("pw_input");
    const pwConfInput = document.getElementById("pw_conf_input");
    const nameInput = document.getElementById("name_input");

    const nicknameValid = document.getElementById("nickname_valid");
    nicknameValid.style.visibility="hidden";
    const idValid = document.getElementById("id_valid");
    idValid.style.visibility="hidden";
    const emailValid = document.getElementById("email_valid");
    emailValid.style.visibility="hidden";

    var isIdChecked = false;
    var isNickChecked = false;
    var isEmailChecked = false;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    /** 입력값이 변하면, 다시 중복검사를 시행해야 한다. */
    idInput.addEventListener('input',resetId);
    nickInput.addEventListener('input',resetNickname);
    emailInput.addEventListener('input',resetEmail);

    function resetId(e) {
        isIdChecked = false;
        idValid.style.visibility = "hidden";
    }

    function resetNickname(e) {
        isNickChecked = false;
        nicknameValid.style.visibility = "hidden";
    }

    function resetEmail(e) {
        isEmailChecked = false;
        emailValid.style.visibility = "hidden";
    }

    /** 중복검사 버튼 */
    // 1. 아이디 중복 검사
    checkIdButton.onclick = function () {
        var userId = document.getElementById("id_input").value;
        makeIdRequest('check_id_duplicate.php', userId);
    };

    // 2. 닉네임 중복 검사
    checkNickButton.onclick = function () {
        var userNickname = document.getElementById("nickname_input").value;
        makeNicknameRequest('check_nickname_duplicate.php', userNickname);
    };

    // 3. 이메일 중복 검사
    checkEmailButton.onclick = function () {
        var userEmail = document.getElementById("email_input").value;
        makeEmailRequest('check_email_duplicate.php', userEmail);
    };

    function makeIdRequest(url, userId) {

        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('XMLHTTP 인스턴스를 만들 수가 없어요 ㅠㅠ');
            return false;
        }

        httpRequest.onreadystatechange = alertIdContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('id=' + encodeURIComponent(userId));
    }

    function makeNicknameRequest(url, userNickname) {

        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('XMLHTTP 인스턴스를 만들 수가 없어요 ㅠㅠ');
            return false;
        }

        httpRequest.onreadystatechange = alertNicknameContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('nickname=' + encodeURIComponent(userNickname));
    }

    function makeEmailRequest(url, userEmail) {

        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('XMLHTTP 인스턴스를 만들 수가 없어요 ㅠㅠ');
            return false;
        }

        if (!emailInput.value.match(mailformat))
        {
            alert('올바른 이메일 형식이 아닙니다.');
            return false;
        }

        httpRequest.onreadystatechange = alertEmailContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('email=' + encodeURIComponent(userEmail));
    }

    function alertIdContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                alert(httpRequest.responseText);
                if (httpRequest.responseText.includes("가능")) {
                    isIdChecked = true;
                    idValid.style.visibility = "visible";
                } else {
                    isIdChecked = false;
                }
            } else {
                alert('request에 뭔가 문제가 있어요.');
            }
        }
    }

    function alertNicknameContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                alert(httpRequest.responseText);
                if (httpRequest.responseText.includes("가능")) {
                    isNickChecked = true;
                    nicknameValid.style.visibility = "visible";
                } else {
                    isNickChecked = false;
                }
            } else {
                alert('request에 뭔가 문제가 있어요.');
            }
        }
    }

    function alertEmailContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                alert(httpRequest.responseText);
                if (httpRequest.responseText.includes("가능")) {
                    isEmailChecked = true;
                    emailValid.style.visibility = "visible";
                } else {
                    isEmailChecked = false;
                }
            } else {
                alert('request에 뭔가 문제가 있어요.');
            }
        }
    }

    /**멤버 등록 전 유효성 검사 */
    function checkInput() {
        if (idInput.value === '' || pwInput.value === '' || pwConfInput.value === '' || nameInput.value === '' || nickInput.value === '' || emailInput.value === '' || answerInput.value === '') {
            alert("필수 항목을 모두 입력해주세요.");
            return false;
        } else if (document.getElementById("pw_input").value !== document.getElementById("pw_conf_input").value) {
            console.log(document.getElementById("pw_input").value);
            console.log(document.getElementById("pw_conf_input").value);
            alert("비밀번호가 일치하지 않습니다.");
            return false;
        } else if (isIdChecked === false) {
            alert("아이디를 다시 검사해주세요.");
            return false;
        } else if (isNickChecked === false) {
            alert("닉네임을 다시 검사해주세요.");
            return false;
        } else if (isEmailChecked === false) {
            alert("이메일을 다시 검사해주세요.");
            return false;
        } else {
            return true;
        }
    }

</script>

</body>
</html>