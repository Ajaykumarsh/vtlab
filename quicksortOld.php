<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/semantic.min.css">
  <script src="js/semantic.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <title>Quick Sort</title>
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
      Quick Sort
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
      <a class="item"  href="compiler.php" target="_blank" id="list">
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
        Sorting is a fundamental task in computing. There are several sorting algorithms developed decades ago, but new algorithms continue to appear.
        In this experiment, the focus is to study a few classical sorting algorithms.
        <br>
        We will primarily be using arrays for our algorithms as it is simple and illustrative to do so. 
        We will cover merge sort, insertion sort, and quick sort in this experiment.
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
            Let us look at one final example of sorting algorithms along with a short proof of correctness. 
            While merge sort can be said to be optimal in terms of its time requiement, it does use some extra space. 
            So one question to prusue is to design a sorting algorithm that can sort in-place, i.e., without using any extra space.
            This is an algorithm based on the divide and conquer strategy called the quick sort that can sort in place. 
            The 3 steps of the algorithm in the framework of divide and conquer are:<br><br>
            
            <div class="GrayBlock">
              <div class="item">Divide: Divide the input into 3 parts L,E, and R where L &lt; E &lt; R based on a pivot.</div>
              <div class="item">Conquer: Solve the sorting problem recursively on L and R. 
                <br>&emsp;&emsp;Assuming that all the items are distinct,we have that |E| = 1 hence already sorted.</div>
              <div class="item">Combine: Produce the sorted L, E, and R in that order.</div>
            </div>
          </div>
          <br>
          <div class="item">
            One can notice that the third step is quite trivial here. 
            In fact, this is an example of the so called partition based algorithms. 
            Let us look at the only non-trivial step, that of partitioning the input. 
            The key to the partition step is to select a pivot and rearrange the elements of the array. 
            For this the following approach is presented:<br><br>
            
            <div class="GrayBlock">
              <div class="item">Procedure Parition(A, l, h)</div>
              <div class="item">&emsp;pivot = A[h];</div>
              <div class="item">&emsp;i = l - 1; 4. for j = p to h - 1 do</div>
              <div class="item">&emsp;&emsp;if A[j] &lt;= pivot</div>
              <div class="item">&emsp;&emsp;&emsp;i = i + 1;</div>
              <div class="item">&emsp;swap A[i] with A[j]</div>
              <div class="item">&emsp;swap A[i + 1] with A[h]</div>
              <div class="item">End Procedure</div>
            </div>
          </div>
        </div>
      </div>
      
      <div id="lis" style="display: none;">Do Quick Sort for given array of variables.</div>
      
      <div id="faqs" style="display: none;">
        1. Quick sort is sorting or searching? <br> A: Yes.
      </div>
      
    </div>
  </div>
</div>
  </div>
  
</body>
</html>