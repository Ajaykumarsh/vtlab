<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
  if(!isset($_SESSION['username']))
  {
    header("Location: index.php");
    exit;
  }
}
?>
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
  <link rel="icon" href="images\dscelogo.png">
  <title>Create Table</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
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
        Video
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
      <iframe width="420" height="345" src="https://www.youtube.com/embed/W3RGQcdrIRY">
</iframe>
          </div>

      
      
      <div id="faqs" style="display: none;">
        <form name="Quiz1">
          <p>1.  A relational database consists of a collection of <br>
            <label><input type="radio" name="q1" value="Tables">Tables</label><br>
            <label><input type="radio" name="q1" value="Fields">Fields</label><br>
            <label><input type="radio" name="q1" value="Records">Records</label><br>
            <label><input type="radio" name="q1" value="Keys">Keys</label><br>
          </p><br>
          <p>2. A ________ in a table represents a relationship among a set of values. <br>
            <label><input type="radio" name="q2" value="Column"> Column</label><br>
            <label><input type="radio" name="q2" value="Key">Key</label><br>
            <label><input type="radio" name="q2" value="Row">Row</label><br>
            <label><input type="radio" name="q2" value="Entry">Entry</label><br>
          </p><br>
          <p>3. The term _______ is used to refer to a row. <br>
            <label><input type="radio" name="q3" value="Attribute">Attribute</label><br>
            <label><input type="radio" name="q3" value="Tuple">Tuple</label><br>
            <label><input type="radio" name="q3" value="Field">Field</label><br>
            <label><input type="radio" name="q3" value="Instance">Instance</label><br>
          </p><br>
          <p>4. The term attribute refers to a ___________ of a table.<br>
            <label><input type="radio" name="q4" value="Record">Record</label><br>
            <label><input type="radio" name="q4" value="Column">Column</label><br>
            <label><input type="radio" name="q4" value="Tuple"> Tuple</label><br>
            <label><input type="radio" name="q4" value="Key">Key</label><br>
          </p><br>
          <p>5.For each attribute of a relation, there is a set of permitted values, called the ________ of that attribute.
<br>
            <label><input type="radio" name="q5" value="Domain">Domain</label><br>
            <label><input type="radio" name="q5" value="Relation">Relation</label><br>
            <label><input type="radio" name="q5" value="Set">Set</label><br>
            <label><input type="radio" name="q5" value="Schema">Schema</label><br>
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