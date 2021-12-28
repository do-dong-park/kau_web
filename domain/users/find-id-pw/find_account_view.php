<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/find_account.css">
    <title>회원 정보 찾기</title>

</head>
<body>
<section class="signup">
    <div class="goBack">

    </div>

    <!--로그인 로고-->
    <div class="find_account_title">
        <Strong><a id="find_title" href="/index.php">토성마을</a></Strong>
    </div>
    <!-- 회원 정보 찾는 부분 -->
    <div class="find_account">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">아이디 찾기
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">비밀번호 찾기
                </button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="name">
                        <!--input id에 대해 label을 적용합니다.-->
                        <label for="name_input" class="form-label">Name</label>
                        <input type="text" class="form-control" id="id_name_input" name="name" placeholder="이름">
                    </div>

                    <div class="email">
                        <!--input id에 대해 label을 적용합니다.-->
                        <label for="email_input" class="form-label">Email</label>
                        <input type="email" class="form-control" id="id_email_input" name="email" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="question">질문 선택</label>
                        <select class="form-control" id="id_question_input" name="question">
                            <option>가장 인상깊게 읽었던 책 이름은?</option>
                            <option>내가 좋아하는 캐릭터는?</option>
                            <option>다시 태어나면 되고싶은 것은?</option>
                            <option>자신의 보물 제 1호는?</option>
                            <option>자신의 인생 좌우명은?</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="answer_input">답변</label>
                        <input type="text" class="form-control" id="id_answer_input" name= "answer" placeholder="답변">
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button" id="find_id">아이디 찾기</button>
                    </div>



            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form class="find_pw" method="post" action="find_pw.php">

                    <div class="Id">
                        <label for="id_input" class="form-label">ID</label>
                        <input type="text" class="form-control" id="pw_id_input" placeholder="아이디">
                    </div>

                    <div class="name">
                        <!--input id에 대해 label을 적용합니다.-->
                        <label for="name_input" class="form-label">Name</label>
                        <input type="text" class="form-control" id="pw_name_input" placeholder="이름">
                    </div>

                    <div class="email">
                        <!--input id에 대해 label을 적용합니다.-->
                        <label for="email_input" class="form-label">Email</label>
                        <input type="email" class="form-control" id="pw_email_input" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="question">질문 선택</label>
                        <select class="form-control" id="pw_question_input" name="question">
                            <option>가장 인상깊게 읽었던 책 이름은?</option>
                            <option>내가 좋아하는 캐릭터는?</option>
                            <option>다시 태어나면 되고싶은 것은?</option>
                            <option>자신의 보물 제 1호는?</option>
                            <option>자신의 인생 좌우명은?</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="answer_input">답변</label>
                        <input type="text" class="form-control" id="pw_answer_input" name= "answer" placeholder="답변">
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button" id="find_pw">비밀번호 찾기</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<script src="/assets/js/jquery-1.11.0.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<script>
    // submit button
    const findIdButton = document.getElementById("find_id");
    const findPwButton = document.getElementById("find_pw");

    // find_id input
    const idNameInput = document.getElementById("id_name_input");
    const idEmailInput = document.getElementById("id_email_input");
    const idQuestionInput = document.getElementById("id_question_input");
    const idAnswerInput = document.getElementById("id_answer_input");

    // find_pw input
    const pwIdInput = document.getElementById("pw_id_input");
    const pwNameInput = document.getElementById("pw_name_input");
    const pwEmailInput = document.getElementById("pw_email_input");
    const pwQuestionInput = document.getElementById("pw_question_input");
    const pwAnswerInput = document.getElementById("pw_answer_input");


    findIdButton.onclick = function () {
        var findIdJson = {name : idNameInput.value, email : idEmailInput.value, question : idQuestionInput.value, answer : idAnswerInput.value};
        getIdRequest('find_id.php',findIdJson);
    };

    function getIdRequest(url, findIdJson) {
        httpRequest = new XMLHttpRequest();

        if(!httpRequest) {
            alert("XMLHTTP 인스턴스를 만들 수 없습니다.");
            return false;
        }

        // 서버로부터, 응답을 받을 때, 일어날 이벤트 설정.
        httpRequest.onreadystatechange = showId;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type',"application/json");
        httpRequest.send(JSON.stringify(findIdJson));
    }

    function showId() {
        if(httpRequest.readyState === XMLHttpRequest.DONE) {
            if(httpRequest.status === 200) {
                alert(httpRequest.responseText);
            } else {
                alert("request에 문제가 있습니다.")
            }
        }
    }

    findPwButton.onclick = function () {
        var findPwJson = {id: pwIdInput.value, name : pwNameInput.value, email : pwEmailInput.value, question : pwQuestionInput.value, answer : pwAnswerInput.value};
        getPwRequest('find_pw.php',findPwJson);
    };

    function getPwRequest(url, findPwJson) {
        httpRequest = new XMLHttpRequest();

        if(!httpRequest) {
            alert("XMLHTTP 인스턴스를 만들 수 없습니다.");
            return false;
        }

        // 서버로부터, 응답을 받을 때, 일어날 이벤트 설정.
        httpRequest.onreadystatechange = showPw;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type',"application/json");
        httpRequest.send(JSON.stringify(findPwJson));
    }

    function showPw() {
        if(httpRequest.readyState === XMLHttpRequest.DONE) {
            if(httpRequest.status === 200) {
                alert(httpRequest.responseText);
            } else {
                alert("request에 문제가 있습니다.")
            }
        }
    }

</script>


</body>
</html>