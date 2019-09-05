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
  <a class="item" href="placement.php">
    Placement Training
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
    First algorithm
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
      Algorithms have a long history and the word can be traced back to the 9th century. At this time the Persian scientist, astronomer and mathematician Abdullah Muhammad bin Musa al-Khwarizmi, often cited as “The father of Algebra”, was indirect responsible for the creation of the term “Algorithm”. In the 12th century one of his books was translated into Latin, where his name was rendered in Latin as “Algorithmi”.
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          Nowadays every person uses the word “Algorithm” as a matter of course, but for the most the exact definition is a mystery. <br><br>
            
            <div class="GrayBlock">
              <div class="item"><strong>Step 1:</strong> We live in the age of information. Analysts are among those inundated with data. But with the aid of powerful computing techniques, analysts can make sense of volumes of data that come in many forms: text, numbers, images, video, audio.</div>
              <div class="item"><strong>Step 2:</strong> Statisticians at Pacific Northwest National Laboratory are marrying computational power with statistical techniques to sift through all these forms of data together. Their work is being applied in a variety of areas, such as analyzing handwriting and identifying bioagents.</div>
              <div class="item"><strong>Step 3:</strong> Whether clients come in with existing data or PNNL gathers the data, statisticians help uncover hidden information through exploratory analysis, grouping like kinds of information and extracting key features. Using systematic sampling and experimental design techniques, they ensure data are reliable and will support confident decisions.</div>
            </div></div>
            <br>
            <img id="theoryImage" src="http://cs-exhibitions.uni-klu.ac.at/fileadmin/gdf/gdf01/timeline.png">
            <br>
            <div class="item">
            "We take varying types of information, whether it's text, video or audio and turn it into mathematical representations. Once we have a mathematical representation, we can apply our statistical techniques of clustering and data analysis," said Brent Pulsipher, who manages PNNL's statistical and quantitative sciences group.
            </div>
          </div>
          <br>
      </div>
      
      <div id="lis" style="display: none;">
      <div class="ui form">
        <div id="compilerData">
        Write a program in whatever language you want to do whatever you want. Sorry for making you do this.<br><br>
         <strong>Input Format:</strong><br>
         Preferably, we want you to print Hello world. But we're not forcing you. Go crazy on the compiler xD.<br><br>
         <strong>Output Format:</strong><br>
         Prints "Hello world" or what you print idk.. But seriously don't get triggered for forcing you to do this. <strong>Gommenasai</strong><br> 
        </div><br>

        <div class="ui segment">
         <div class="ui two column very relaxed grid">
              <div class="column">
                <strong>Sample Input</strong><br>
                <strike>BRUH IDK PUT SOME SHIT I DON'T GIVE A FU*K</strike>
              </div>
              <div class="column">
                <strong>Sample Output</strong><br>
                <strike>I ALREADY TOLD YOU I DON'T FU*KING CARE YOU DIPSHIT!</strike><br>
              </div>
         </div>
         <div class="ui vertical divider">and</div>
         </div>
        </div><br>

        
          <form action="compile.php" id="form" name="f2" method="POST" ><br>
          <label class="writeCode" for="lang">Choose Language<br></label>

            <select class="ui dropdown" name="language" style="margin-left: 30px;">
            <option class="item" value="c">C</option>
            <option class="item" value="cpp">C++</option>
            <option class="item" value="java">Java</option>
            <option class="item" value="python2.7">Python 2.7</option>
            <option class="item" value="python3.2">Python 3.2</option>
            </select><br><br>

          <label class="writeCode">Write Your Code</label><br><br>
          <!-- <div class="ui  large segment"  id="editor" style="height:500px;"> -->
          <!-- <textarea class="field codeBlock"  id="editor" name="code" rows="10" cols="50">
#include&lt;stdio.h&gt;
void main()
{

}</textarea><br><br> -->

<div class="ui large segment" style="height:500px; font-size: 20px">
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
          <textarea class="field codeBlock" name="input" rows="5" cols="80"></textarea><br><br><br>
          </div>

        
          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

          </form>

          <script type="text/javascript">
          $(document).ready(function(){
            $("#st").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                  // var code=editor.getValue();
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
            <span id="q1"></span>
          </p><br>
          <p>2. Yes?<br>
            <label><input type="radio" name="q2" value="Ok">Ok</label><br>
            <label><input type="radio" name="q2" value="Sure">Sure</label><br>
            <label><input type="radio" name="q2" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q2" value="Aythu">Aythu</label><br>
            <span id="q2"></span>
          </p><br>
          <p>3. Yes?<br>
            <label><input type="radio" name="q3" value="Ok">Ok</label><br>
            <label><input type="radio" name="q3" value="Sure">Sure</label><br>
            <label><input type="radio" name="q3" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q3" value="Aythu">Aythu</label><br>
            <span id="q3"></span>
          </p><br>
          <p>4. Yes?<br>
            <label><input type="radio" name="q4" value="Ok">Ok</label><br>
            <label><input type="radio" name="q4" value="Sure">Sure</label><br>
            <label><input type="radio" name="q4" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q4" value="Aythu">Aythu</label><br>
            <span id="q4"></span>
          </p><br>
          <p>5. Yes?<br>
            <label><input type="radio" name="q5" value="Ok">Ok</label><br>
            <label><input type="radio" name="q5" value="Sure">Sure</label><br>
            <label><input type="radio" name="q5" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q5" value="Aythu">Aythu</label><br>
            <span id="q5"></span>
          </p><br>
          <p>6. Yes?<br>
            <label><input type="radio" name="q6" value="Ok">Ok</label><br>
            <label><input type="radio" name="q6" value="Sure">Sure</label><br>
            <label><input type="radio" name="q6" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q6" value="Aythu">Aythu</label><br>
            <span id="q6"></span>
          </p><br>
          <p>7. Yes?<br>
            <label><input type="radio" name="q7" value="Ok">Ok</label><br>
            <label><input type="radio" name="q7" value="Sure">Sure</label><br>
            <label><input type="radio" name="q7" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q7" value="Aythu">Aythu</label><br>
            <span id="q7"></span>
          </p><br>
          <p>8. Yes?<br>
            <label><input type="radio" name="q8" value="Ok">Ok</label><br>
            <label><input type="radio" name="q8" value="Sure">Sure</label><br>
            <label><input type="radio" name="q8" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q8" value="Aythu">Aythu</label><br>
            <span id="q8"></span><br>
          <input type="submit" id="quizSub" class="ui left floated button" value="Submit" onclick="quizCorrection()">
        </form>
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
<script>$('select.dropdown').dropdown();</script>
  
</body>
</html>