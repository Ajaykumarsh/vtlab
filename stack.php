<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <title>Stack Operations</title>
</head>
<body>
  <h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  Virtual Labs 
</h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
   <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item
  </a> -->
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Operations on Stack
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Theory
      </a>
      <a class="item" target="_blank" id="list">
        Compiler
      </a>
      <a class="item" id="faq">
        Quiz
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
      Stack is a linear data structure which follows a particular order in which the operations are performed. The order may be LIFO(Last In First Out) or FILO(First In Last Out).
        <br><br>
        There are many real-life examples of a stack. Consider an example of plates stacked over one another in the canteen. The plate which is at the top is the first one to be removed, i.e. the plate which has been placed at the bottommost position remains in the stack for the longest period of time. So, it can be simply seen to follow LIFO(Last In First Out)/FILO(First In Last Out) order.
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          Stack is a linear data structure which follows a particular order in which the operations are performed. The order may be LIFO(Last In First Out) or FILO(First In Last Out).
          Mainly the following three basic operations are performed in the stack:<br><br>
            
            <div class="GrayBlock">
              <div class="item"><strong>Push:</strong> Adds an item in the stack. If the stack is full, then it is said to be an Overflow condition. (Insert)</div>
              <div class="item"><strong>Pop:</strong> Removes an item from the stack. The items are popped in the reversed order in which they are pushed. If the stack is empty, then it is said to be an Underflow condition. (Delete)</div>
              <div class="item"><strong>Display:</strong> Displays the content of the stack.</div>
            </div></div>
            <br>
            <img src="images/stack.png">
            <br>
            <div class="item">
              Stacks are implemented using arrays or Linked Lists. Stacks are Easy to implement and Memory is saved as pointers are not involved. But, it is not dynamic. It doesn’t grow and shrink depending on needs at runtime.
            </div>
          </div>
          <br>
      </div>
      
      <div id="lis" style="display: none;">
      <div class="ui form">
        <div id="compilerData">
        Write a program in C to simulate the working of a stack of integers using an array. Provide the following operations:<br>
         a. Insert<br> b. Delete<br> c. Display.<br><br>
         <strong>Input Format:</strong><br>
         Every line consists of one argument, a character. If the character is 'a', the next argument is an integer.<br>
         The Character denotes the operation. 'a' is to Insert, 'b' is to Delete, and 'c' is to Display.<br>
         The Integer denotes the value to Insert into the stack.<br>
         Note: The program ends only when a character which is not any of the above options is entered.<br><br>
         <strong>Output Format:</strong><br>
         Prints one/multiple array of integers, denoting the composition of the stack.<br> 
        </div><br>
        
          <form action="compile.php" id="form" name="f2" method="POST" ><br>
          <label class="writeCode">Write Your Code</label><br><br>
          <textarea class="field codeBlock" name="code" rows="10" cols="50">
#include&lt;stdio.h&gt;
void main()
{
// Your code goes here

}</textarea><br><br>
          <input type="hidden" name="extra" value="Content of the extra variable" >
          <button class="ui left floated button" onclick="myFunction()">Custom Input</button>
          <div id="inputs" style="display:None;">
          <br><br>
          <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
          <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
          </div>

          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" method="POST" action="submit.php"><br><br><br>

          </form>

          <script type="text/javascript">
          $(document).ready(function(){
            $("#st").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                  document.form.extra.value = "run";
            });
          });
          </script>
          <script type="text/javascript">
          $(document).ready(function(){
            $("#subb").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                  document.form.extra.value = "subb";
            });
          });
          </script>

          <script type="text/javascript">
            $(document).ready(function(){
              //listen for form submission
              $('form').on('submit', function(e){
                //prevent form from submitting and leaving page
                e.preventDefault();

                // AJAX 
                $.ajax({
                      type: "POST", //type of submit
                      cache: false, //important or else you might get wrong data returned to you
                      url: "compile.php", //destination
                      datatype: "html", //expected data format from process.php
                      data: $('form').serialize(), //target your form's data and serialize for a POST
                      success: function(result) { // data is the var which holds the output of your process.php

                          // locate the div with #result and fill it with returned data from process.php
                          $('#outputBox').html(result);
                      }
                  });
              });
          });
          </script>
          <br>
          <div id="outputBox" style="display:None;">Output:<br><br>
          <div name="output"></div><br>
          </div>
          </div>

      </div>
      
      <div id="faqs" style="display: none;">
        <form name="Quiz1">
          <p>1. Yes?<br>
            <label><input type="radio" name="q1" value="Ok">Ok</label><br>
            <label><input type="radio" name="q1" value="Sure">Sure</label><br>
            <label><input type="radio" name="q1" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q1" value="Aythu">Aythu</label><br>
          </p><br>
          <p>2. Yes?<br>
            <label><input type="radio" name="q2" value="Ok">Ok</label><br>
            <label><input type="radio" name="q2" value="Sure">Sure</label><br>
            <label><input type="radio" name="q2" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q2" value="Aythu">Aythu</label><br>
          </p><br>
          <p>3. Yes?<br>
            <label><input type="radio" name="q3" value="Ok">Ok</label><br>
            <label><input type="radio" name="q3" value="Sure">Sure</label><br>
            <label><input type="radio" name="q3" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q3" value="Aythu">Aythu</label><br>
          </p><br>
          <p>4. Yes?<br>
            <label><input type="radio" name="q4" value="Ok">Ok</label><br>
            <label><input type="radio" name="q4" value="Sure">Sure</label><br>
            <label><input type="radio" name="q4" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q4" value="Aythu">Aythu</label><br>
          </p><br>
          <p>5. Yes?<br>
            <label><input type="radio" name="q5" value="Ok">Ok</label><br>
            <label><input type="radio" name="q5" value="Sure">Sure</label><br>
            <label><input type="radio" name="q5" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q5" value="Aythu">Aythu</label><br>
          </p><br>
          <p>6. Yes?<br>
            <label><input type="radio" name="q6" value="Ok">Ok</label><br>
            <label><input type="radio" name="q6" value="Sure">Sure</label><br>
            <label><input type="radio" name="q6" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q6" value="Aythu">Aythu</label><br>
          </p><br>
          <p>7. Yes?<br>
            <label><input type="radio" name="q7" value="Ok">Ok</label><br>
            <label><input type="radio" name="q7" value="Sure">Sure</label><br>
            <label><input type="radio" name="q7" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q7" value="Aythu">Aythu</label><br>
          </p><br>
          <p>8. Yes?<br>
            <label><input type="radio" name="q8" value="Ok">Ok</label><br>
            <label><input type="radio" name="q8" value="Sure">Sure</label><br>
            <label><input type="radio" name="q8" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q8" value="Aythu">Aythu</label><br>
          </p><br>
          <input type="submit" id="quizSub" class="ui left floated button" value="Submit">
        </form>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  
</body>
</html>