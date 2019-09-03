function quizCorrection() {
    var count = 0;
    if(Quiz1.q1.value ==="stack" ){
         count++;
         $("#q1").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q1").html("<code>Incorrect answer.</code><br><code>Correct answer is Stack</code>");
    }
    if(Quiz1.q2.value ==="85521" ){ 
        count++;
        $("#q2").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q2").html("<code>Incorrect answer.</code><br><code>Correct answer is 8 5 5 2 1</code>");
    }
    if(Quiz1.q3.value ==="Array and Linked List" ){ 
        count++;
        $("#q3").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q3").html("<code>Incorrect answer.</code><br><code>Correct answer is Array and Linked List </code>");
    }
    if(Quiz1.q4.value === "Allocation Resources and Scheduling" ){ 
        count++;
        $("#q4").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q4").html("<code>Incorrect answer.</code><br><code>Correct answer is Allocation Resources and Scheduling</code>");
    }
    if(Quiz1.q5.value ==="Graph" ){ 
        count++;
        $("#q5").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q5").html("<code>Incorrect answer.</code><br><code>Correct answer is Graph</code>");
    }
    if(Quiz1.q6.value === "Stack" ){ 
        count++;
        $("#q6").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q6").html("<code>Incorrect answer.</code><br><code>Correct answer is Stack</code>");
    }
    if(Quiz1.q7.value === "Array" ){ 
        count++;
        $("#q7").html("<code>Ha! Nice Correct Answer</code>");
    }
    else{
        $("#q7").html("<code>Incorrect answer.</code><br><code>Correct answer is Array</code>");
    }
    if(Quiz1.q8.value ==="Stack" ){ 
        count++;
        $("#q8").html("<code>Ha! Nice Correct Answer</code><br>");
    }
    else{
        $("#q8").html("<code>Incorrect answer.</code><br><code>Correct answer is Stack</code><br>");
    }
    var percentage = Math.round(count*10000)/8;
    document.getElementById('result').innerHTML = "Result: " + percentage/100 + "%<br>Correct: " + count + "<br>Wrong: " + (8-count);
}