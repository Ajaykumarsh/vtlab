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
  <title>Java lab</title>
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
      OOPS With Java Laboratory
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Objective
      </a>
      <a class="item" id="list">
        List of Experiments
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
      Object Oriented programming is a programming style which is associated with the concepts like class, object, Inheritance, Encapsulation, Abstraction, Polymorphism
      An object-based application in Java is based on declaring classes, creating objects from them and interacting between these objects.
    </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="#">Class fundamentals, declaring Objects</a>
          <a class="item" href="#">Overloading methods & Constructors,e</a>
          <a class="item" href="#">Packages & Interfaces</a>
          <a class="item" href="#">Exception Handling</a>
          <a class="item" href="#">. Multithreaded Programming</a>
          <a class="item" href="#">Generics and String handling</a>
        </div>
      </div>
      
      <div id="pre" align="justify" style="display: none;"> Understand fundamentals of object-oriented programming in Java. 
Gain knowledge on working of Packages, Interfaces & Files in Java
Understand the importance of Generic classes, Strings and Multithreaded Programming.</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is a dog?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What kinds of dogs are there? 
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
          </div>

          <div class="title" id="dion3">
            <i class="dropdown icon"></i>What is a dog?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
             });
</script>
</body>
</html>