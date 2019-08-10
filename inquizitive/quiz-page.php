<?php include('output.php') ?>
<?php include('protect.php') ?>
<?php include('app.php') ?>
<?php include('quiz.php') ?>
<?php include('question.php') ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body oncontextmenu="return false">
    <div class="grid">
        <div id="quiz">
            <h1 id="heading">Tech-Quiz</h1>
            <hr style="margin-bottom: 20px">

            <p id="question"></p>

            <div class="buttons">
                <button id="btn0"><span id="choice0"></span></button>
                <button id="btn1"><span id="choice1"></span></button>
                <button id="btn2"><span id="choice2"></span></button>
                <button id="btn3"><span id="choice3"></span></button>
            </div>

            <hr style="margin-top: 50px">
            <footer>
                <p id="progress">Question x of y</p>
            </footer>
            <script type="text/javascript">
              var r = 0;
              var g = 255;
              function countDown(minutes,secs,elem){
                var element = document.getElementById(elem);
                element.innerHTML = "<h2 id='countdown'>The Quiz Continues for </h2>"+"<h1 id='time'>"+minutes+":"+secs+"</h1>"+"<h2 id='countdown'> seconds</h2>";
                if(secs<1){
                  if(minutes>=1){
                    minutes--;
                    secs = 60;
                  }
                }
                if (secs<1) {
                  if(minutes<1){
                    clearTimeout(timer);
                    element.innerHTML = '<h2>Test is Over. Thanks for participating.</h2>';
                    element.innerHTML += '<a href="#">Click here now</a>';
                    showScores();
                  }
                }
                /*document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + 0 + ')';*/
                secs--;
                var timer = setTimeout('countDown('+minutes+','+secs+',"'+elem+'")',1000);
              }
            </script>
            <div id="status"></div>
            <script type="text/javascript">countDown(30, 00, "status");</script>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>
