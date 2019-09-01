<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Compiler</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <script src="script.js"></script>

</head>
<body>
<div>

<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="https://cdn.glitch.com/f3f0a812-ef86-4316-8cee-84e24f8e112e%2Fdsce.png?v=1566407586257"></a>
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
   <a class="item">
    Item
  </a>
  <a class="item">
    Item
  </a>
</div>
</div>
<br><br>
<div class="row log">
<div class="col-sm-10">
<div id="compilerHead">Online Compiler</div>
</div>
<br><br>
<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>

<div class="row cspace">
<div class="col-sm-8">
<div class="ui form">
<form action="compile.php" id="form" name="f2" method="POST" >

<label class="writeCode">Write Your Code</label>
<textarea class="field codeBlock" name="code" rows="10" cols="50" placeholder="Type your C Program here"></textarea><br><br>

&emsp;<button class="btn btn-success" onclick="myFunction()">Custom Input</button>
<div id="inputs" style="display:None;">
<br><br>
<label for="in" class="writeCode">Enter Your Input</label>
<textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
</div>

&emsp;<input type="submit" id="st" class="btn btn-success" value="Run Code" onclick="myFunction2()">
&emsp;<input type="submit" id="subb" class="btn btn-success" value="Submit" onclick="myFunction2()"><br><br><br>


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

<div id="outputBox" style="display:None;">Output:<br><br>
<div name="output"></div><br>
</div>
</div>
</div>
</body>
</html>


