<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/questions.js"></script>
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
  <a class="item" href="datastructures.php">
    Data Structures
  </a>
 <a class="item">
    About Us
  </a> 
   
  <!-- <a class="item">
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
        <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/sFVxsglODoo">
</iframe>
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
            <img id="theoryImage" src="images/stack.png">
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
         Print one/more array of integers, denoting the composition of the stack.<br> 
        </div><br>

        <div class="ui segment">
         <div class="ui two column very relaxed grid">
              <div class="column">
                <strong>Sample Input</strong><br>
                a 5<br>a 8<br>c<br>b<br>a 7<br>c<br>q
              </div>
              <div class="column">
                <strong>Sample Output</strong><br>
                8 5 <br>7 5 <br>
              </div>
         </div>
         <div class="ui vertical divider">and</div>
         </div>
        </div><br>

        
          <form action="compile.php" id="form" name="f2" method="POST" ><br>
          <label class="writeCode">Write Your Code</label><br><br>
          <!-- <div class="ui  large segment"  id="editor" style="height:500px;"> -->
          <!-- <textarea class="field codeBlock"  id="editor" name="code" rows="10" cols="50">
#include&lt;stdio.h&gt;
void main()
{

}</textarea><br><br> -->

<div class="ui large segment" style="height:500px;">
<div id="editor">/*Type your code here: */
#include&lt;stdio.h&gt;
void main()
{

}
</div>
</div>
<div>
<textarea name="editor" style="display: none;" >
</div>
<textarea style="display: none;"></textarea>

<button class="ui left floated button" onclick="myFunction()">Custom Input</button>
          <div id="inputs" style="display:None;">
          <br><br>
          <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
          <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
          </div>

        <input type="hidden" name="extra" value="Content of the extra variable" >
         <input type="hidden" name="lang" value="c" >
         <input type="hidden" name="prog" value="stack" >
          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

          </form>

         <script type="text/javascript">
          $(document).ready(function(){
            $("#st").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                  document.f2.extra.value = "runn";
            });
          });
          </script>
          <script type="text/javascript">
          $(document).ready(function(){
            $("#subb").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                  document.f2.extra.value = "subb";
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
          <p>1. The terms Push and Pop is related to<br>
            <label><input type="radio" name="q1" value="stack">Stack</label><br>
            <label><input type="radio" name="q1" value="Queue">Queue</label><br>
            <label><input type="radio" name="q1" value="Both">Both</label><br>
            <label><input type="radio" name="q1" value="None">None</label><br>
            <span id="q1"></span>
          </p><br>
          <p>2.Choose the correct output for the following sequence of operations:<br>   
            push(5)<br>
            push(8)<br>
            pop <br>
            push(2)<br>
            push(5)<br>
            pop<br>
            pop<br>
            pop<br>
            push(1)<br>
            pop<br>
            <label><input type="radio" name="q2" value="85521">8 5 5 2 1</label><br>
            <label><input type="radio" name="q2" value="85251">8 5 2 5 1</label><br>
            <label><input type="radio" name="q2" value="82551">8 2 5 5 1</label><br>
            <label><input type="radio" name="q2" value="82515">8 2 5 1 5</label><br>
            <span id="q2"></span>
          </p><br>
          <p>3. Stacks can be implemented using _________ and ________
<br>
            <label><input type="radio" name="q3" value="Array and Binary tree">Array and Binary tree</label><br>
            <label><input type="radio" name="q3" value="Linked List and Graph">Linked List and Graph</label><br>
            <label><input type="radio" name="q3" value="Array and Linked List">Array and Linked List</label><br>
            <label><input type="radio" name="q3" value="Queue and Linked List">Queue and Linked List</label><br>
            <span id="q3"></span>
          </p><br>
          <p>4. Stack data structure cannot be used for<br>
            <label><input type="radio" name="q4" value="Allocation Resources and Scheduling">Allocation Resources and Scheduling</label><br>
            <label><input type="radio" name="q4" value="Implementation of Recursive funtion">Implementation of Recursive funtion</label><br>
            <label><input type="radio" name="q4" value="Reversing String">Reversing String</label><br>
            <label><input type="radio" name="q4" value="Evaluation of string in postfix form">Evaluation of string in postfix form</label><br>
            <span id="q4"></span>
          </p><br>
          <p>5. Which of the following datastructure is non linear<br>
            <label><input type="radio" name="q5" value="Graph">Graph</label><br>
            <label><input type="radio" name="q5" value="Stack">Stack</label><br>
            <label><input type="radio" name="q5" value="List">List</label><br>
            <label><input type="radio" name="q5" value="None of the above">None of the above</label><br>
            <span id="q5"></span>
          </p><br>
          <p>6. Which of the following datastructure is linear<br>
            <label><input type="radio" name="q6" value="Binary tree">Binary tree</label><br>
            <label><input type="radio" name="q6" value="Trees">Trees</label><br>
            <label><input type="radio" name="q6" value="Graph">Graph</label><br>
            <label><input type="radio" name="q6" value="Stack">Stack</label><br>
            <span id="q6"></span>
          </p><br>
          <p>7. Which of the datastructures cannot store non-homogenous Data Elements<br>
            <label><input type="radio" name="q7" value="Array">Array</label><br>
            <label><input type="radio" name="q7" value="stack">Stack</label><br>
            <label><input type="radio" name="q7" value="Records">Records</label><br>
            <label><input type="radio" name="q7" value="None of the above">None of the above</label><br>
            <span id="q7"></span>
          </p><br>
          <p>8. The data structure required to check whether an expression contains balanced parenthesis is<br>
            <label><input type="radio" name="q8" value="Stack">Stack</label><br>
            <label><input type="radio" name="q8" value="Queue">Queue</label><br>
            <label><input type="radio" name="q8" value="Array">Array</label><br>
            <label><input type="radio" name="q8" value="Tree">Tree</label><br>
            <span id="q8"></span><br>
          <input type="submit" id="quizSub" class="ui left floated button" value="Submit" onclick="quizCorrection()">
        </form><br><br>
        <div id="result">
        </div>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/c_cpp");
    var textarea = $('textarea[name="editor"]');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
});
  //  function getcodeVal(){
  //   var code = editor.getValue();
  //   console.log(code);
  //  }
</script>
  
</body>
</html>