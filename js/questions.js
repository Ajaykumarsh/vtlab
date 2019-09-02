function quizCorrection() {
    var count = 0;
    if(Quiz1.q1.value == "Ok" ){
         count++;
         $("#q1").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q1").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q2.value == "Ok" ){ 
        count++;
        $("#q2").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q2").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q3.value == "Ok" ){ 
        count++;
        $("#q3").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q3").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q4.value == "Ok" ){ 
        count++;
        $("#q4").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q4").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q5.value == "Ok" ){ 
        count++;
        $("#q5").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q5").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q6.value == "Ok" ){ 
        count++;
        $("#q6").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q6").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q7.value == "Ok" ){ 
        count++;
        $("#q7").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q7").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code>");
    }
    if(Quiz1.q8.value == "Ok" ){ 
        count++;
        $("#q8").html("<code>Ha! Nice Correct Answer</code><br>");
    }
    else{
        $("#q8").html("<code>Incorrect answer.</code><br><code>Correct answer is Ok</code><br>");
    }
    var percentage = Math.round(count*10000)/8;
    document.getElementById('result').innerHTML = "Result: " + percentage/100 + "%<br>Correct: " + count + "<br>Wrong: " + (8-count);
}