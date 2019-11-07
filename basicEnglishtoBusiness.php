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
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Basic English to Business English</title>
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
 <a href="english.php" class="item">
    English Speaking
  </a> 
   <a class="item">
    About Us
  </a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    How to change Basic English into Business English
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
      <a class="item" id="list">
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
         English is the language of science, of aviation, computers, diplomacy, and tourism. Knowing English increases your chances of getting a good job in a multinational company within your home country or for finding work abroad. 
        <br>  <br> 
        It’s also the language of international communication, the media and the internet, so learning English is important for socialising and entertainment as well as work!
      </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            There are tons of ways to improve your English speaking skills for business matters. The key is to always keep practicing—and to find the perfect resources for your business purposes!
            <br><br> Get Some Basic Conversation Skills
Being good at English is about more than just talking. You have to be able to listen and comprehend what people are saying as well.
<br>
In the workplace, this means talking with colleagues, clients and vendors.
<br><br>
Here are some basic conversation skills that will help you improve your business English when speaking with people at work:
<br><br>
Listen before you respond. A lot of people start thinking about their responses before another person is finished speaking. This is distracting, particularly when you are a beginner. You might stop paying attention to the person who is speaking, because you are too busy thinking about what to say! So, do not start stressing about what you will say until you hear everything that the other person has to say. Doing this will allow you to focus on what is being said and, hopefully, this will help you learn from the vocabulary and grammar they use. Try to understand their message completely. By understanding completely, it will be easier to think of an answer.<br><br>
Go slow. Now that it is your turn to talk, do not feel in a rush to speak. Think through what you are going to say, and try to include any newly learned vocabulary words and phrases for good practice.<br><br>
Ask for help. Most likely, the person you are speaking with is aware that you are not a native English speaker. Politely ask for help when you need it. Ask a colleague to clarify things you do not understand. Clarify means to explain something so it is clearly understood. You can also ask the person to help correct you when you make a mistake.<br><br>
Practice at Home
If you want to improve your business English, you are going to have to spend time outside of your office hours doing so. This usually means practicing at home in your free time. There are many ways to do this:

            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">  
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/_2ZDNgtAsbw">
</iframe>      </div>
      
      <div id="faqs" style="display: none;">
      <form name="Quiz1">
      Check your Basic English Skills
          <p>1.Mike _______ his teeth before breakfast every morning.<br>
            <label><input type="radio" name="q1" value="will cleaned">	will cleaned</label><br>
            <label><input type="radio" name="q1" value="is cleaning">is cleaning</label><br>
            <label><input type="radio" name="q1" value="cleans">cleans</label><br>
            <label><input type="radio" name="q1" value="clean">clean</label><br>
            <span id="q1"></span> cleans
          </p><br>
          <p>2.How many students in your class ..... from Korea?<br>
            <label><input type="radio" name="q2" value="comes">comes</label><br>
            <label><input type="radio" name="q2" value="come">come</label><br>
            <label><input type="radio" name="q2" value="came">came</label><br>
            <label><input type="radio" name="q2" value="are coming">are coming</label><br>
            <span id="q2"></span>
          </p><br>come
          <p>3. At a school dance: <br>
Jane: " Are you enjoying yourself?"<br>
Mary: "Yes, I'm having a great time!"<br>
<br>
            <label><input type="radio" name="q3" value="You enjoying">You enjoying</label><br>
            <label><input type="radio" name="q3" value="Enjoy you">	Enjoy you</label><br>
            <label><input type="radio" name="q3" value="Do you enjoy">Do you enjoy</label><br>
            <label><input type="radio" name="q3" value="Are you enjoying">Are you enjoying</label><br>
            <span id="q3"></span>Are you enjoying
          </p><br>
          <p>4.	What time does the _______? <br>
            <label><input type="radio" name="q4" value="the train leaves?">	the train leaves?</label><br>
            <label><input type="radio" name="q4" value="leaves the train?">leaves the train?</label><br>
            <label><input type="radio" name="q4" value="is the train leaving?">is the train leaving?</label><br>
            <label><input type="radio" name="q4" value="does the train leave?">does the train leave?</label><br>
            <span id="q4"></span>train leave?
          </p><br>
          <p>5. 	I ________ for my pen. Have you seen it?
<br>
            <label><input type="radio" name="q5" value="will look">will look</label><br>
            <label><input type="radio" name="q5" value="looking">	looking</label><br>
            <label><input type="radio" name="q5" value="look">look</label><br>
            <label><input type="radio" name="q5" value="am looking">am looking</label><br>
            <span id="q5"></span>am looking
          </p><br>
          <input type="submit" id="quizSub" class="ui left floated button" value="Submit" onclick="quizCorrection()">
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
  
</body>
</html>