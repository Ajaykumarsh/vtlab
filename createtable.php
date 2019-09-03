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
  <title>Create Table</title>
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
    Create Table
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
      CREATE TABLE statement is used to create a new table in the database.
<br><br>
To create a table, you have to name that table and define its columns and datatype for each column.
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          table_name: It specifies the name of the table which you want to create. <br><br>
column1, column2, ... column n: It specifies the columns which you want to add in the table.<br> <br>Every column must have a datatype. Every column should either be defined as "NULL" or "NOT NULL". In the case, the value is left blank; it is treated as "NULL" as default.
          <div class="GrayBlock">
          CREATE TABLE table_name  
           (   
                  column1 datatype [ NULL | NOT NULL ],  
                  column2 datatype [ NULL | NOT NULL ],  
                  ...  
                  column_n datatype [ NULL | NOT NULL ]  
           );  
            </div></div>
            <br>
            
            <br>
            <div class="item">
             For Example: Here we are creating a table named customers. This table doesn't have any primary key.
             <div class="GrayBlock">
             CREATE TABLE customers  
               (   customer_id number(10) NOT NULL,  
                   customer_name varchar2(50) NOT NULL,  
                city varchar2(50)  
               );  
            </div>
            This table contains three columns

customer_id: It is the first column created as a number datatype (maximum 10 digits in length) and cannot contain null values. <br><br>
customer_name: it is the second column created as a varchar2 datatype (50 maximum characters in length) and cannot contain null values.<br><br>
city: This is the third column created as a varchar2 datatype. It can contain null values.
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

}</textarea><br><br>

          <button class="ui left floated button" onclick="myFunction()">Custom Input</button>
          <div id="inputs" style="display:None;">
          <br><br>
          <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
          <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
          </div>

          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

          </form>

          <script type="text/javascript">
          $(document).ready(function(){
            $("#st").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
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