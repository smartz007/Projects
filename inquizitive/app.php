<?php
$pagecode=   "$.get('protect.js' , function(data){
  eval();
});

function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById(\"question\");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById(\"choice\" + i);
            element.innerHTML = choices[i];
            guess(\"btn\" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
  //get to next question
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
  //show progress
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById(\"progress\");
    element.innerHTML = \"Question \" + currentQuestionNumber + \" of \" + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = \"<h1>Result</h1>\";
    gameOverHTML += \"<h2 id='score'> Your scores: \" + quiz.score + \"</h2>\"+\"<h2 id='greeting'>Quiz is over. Thanks for participating.</h2>\";
     //gameOverHTML += \"<h2 id='greeting'>Quiz is Over...Thanks for participating...</h2>\";
    
    
    var element = document.getElementById(\"quiz\");
    element.innerHTML = gameOverHTML;
    
    //window.location = \"output.php\";
};

// create questions
var questions = [
    new Question(\"Which one is not an object oriented programming language?\", [\"Java\", \"C#\",\"C++\", \"C\"], \"C\"),
    new Question(\"Which language is used for styling web pages?\", [\"HTML\", \"JQuery\", \"CSS\", \"XML\"], \"CSS\"),
    new Question(\"There are ____ main components of object oriented programming.\", [\"1\", \"6\",\"2\", \"4\"], \"4\"),
    new Question(\"Which language is used for web apps?\", [\"PHP\", \"Python\", \"Javascript\", \"All\"], \"All\"),
    new Question(\"MVC is a ____.\", [\"Language\", \"Library\", \"Framework\", \"All\"], \"Framework\"),
    new Question(\"Who is known as stanford star?\", [\"Tarak\", \"Tarak\", \"Tarak\", \"All of the above.\"], \"All of the above.\"),
    new Question(\"What is a number greater than 4?\",[\"3\",\"-3\",\"5\",\"2\"],\"5\"),
    new Question(\"What is a number greater than 5?\",[\"4\",\"-3\",\"6\",\"2\"],\"6\"),
    new Question(\"What is www?\",[\"world wide wire\",\"world where web\",\"world wide web\",\"world wide wan\"],\"world wide web\"),
    new Question(\"What is ln(e)?\",[\"2.303\",\"1\",\"0.341\",\"-1\"],\"1\"),
    new Question(\"What is more secure?\",[\"http//\",\"https://\",\"http://\",\"https??\"],\"https://\"),
    new Question(\"What is a Indian silicon valley?\",[\"Gurgaon\",\"Bengaluru\",\"Hyderabad\",\"Pune\"],\"Bengaluru\"),
    new Question(\"What is a not a flavour of unix?\",[\"ubuntu\",\"ment os\",\"red hat\",\"cent os\"],\"ment os\"),
    new Question(\"What is a not a flavour of Mac OS?\",[\"X Lion\",\"Cresent\",\"High Sierre\",\"Mojhave\"],\"Cresent\"),
    new Question(\"What is not a type of ram available?\",[\"DDR2\",\"DDR4\",\"DDR3\",\"DDR6\"],\"DDR6\"),
    new Question(\"Who made the first computer?\",[\"Charles Babbage\",\"Robert Wilton\",\"Alan Turing\",\"Han Smith\"],\"Alan Turing\"),
    new Question(\"What is 5+10\",[\"-15\",\"14\",\"15\",\"12\"],\"15\"),
    new Question(\"What is not a oops supporting language?\",[\"ada\",\"c++\",\"prolog\",\"smalltalk\"],\"prolog\"),
    new Question(\"What is a number nearest to ln(2)\",[\"3\",\"1\",\"0\",\"2\"],\"1\"),
    new Question(\"Who is the creator of paypal\",[\"Allison Grey\",\"Elon Musk\",\"Mukesh Srivastav\",\"Pagolu Sravan\"],\"Elon Musk\"),
    new Question(\"What is a number greater?\",[\"megabyte\",\"yottabyte\",\"petabyte\",\"geopbyte\"],\"geopbyte\")
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();
\n";

echo "$pagecode";
?>