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
  <link rel="icon" href="images\dscelogo.png">
  <title>Network Utilities</title>
</head>
<body>
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
 <a href="cn.php" class="item">
    Computer Network
  </a> 
   <a class="item">
    About Us
  </a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Network Utilities
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
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
      <div id="lis" style="padding: 15px; height: 400px;">  
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/-55X-koiBFg">
</iframe>      </div>
    
<div id="faqs" style="display: none;">
      
      <form name="Quiz1">
      
          <p>1.Purpose of IP Config is<br>
            <label><input type="radio" name="q1" value="to test the availability of destination host">to test the availability of destination host</label><br>
            <label><input type="radio" name="q1" value="to list the parameters of the network interfaces">to list the parameters of the network interfaces</label><br>
            <label><input type="radio" name="q1" value="to know the IP address of the webserver">to know the IP address of the webserver</label><br>
            <label><input type="radio" name="q1" value="None of these">None of these</label><br>
            <span id="q1"></span>
          </p><br>
          <p>2.PING can display the round trip time of a packet journey<br>
            <label><input type="radio" name="q2" value="YES">YES</label><br>
            <label><input type="radio" name="q2" value="NO">NO</label><br>
            <span id="q2"></span>
          </p><br>
          <p>3.To know whether DHCP is enabled,follow in gutility is used<br>
            <label><input type="radio" name="q3" value="Netstat">Netstat</label><br>
            <label><input type="radio" name="q3" value="PING">PING</label><br>
            <label><input type="radio" name="q3" value="IPConfig">IPConfig</label><br>
            <label><input type="radio" name="q3" value="TraceRt">TraceRt</label><br>
            <span id="q3"></span>
          </p><br>
          <p>4. Utility to find out how many routers are there from my PC to google server:<br>
            <label><input type="radio" name="q4" value="PING">PING</label><br>
            <label><input type="radio" name="q4" value="TraceRoute">TraceRoute</label><br>
            <label><input type="radio" name="q4" value="Netstat">Netstat</label><br>
            <label><input type="radio" name="q4" value="IPConfig">IPConfig</label><br>
            <span id="q4"></span>
          </p><br>
          <p>5.PING makes use of following protocol<br>
            <label><input type="radio" name="q5" value="HTTP">HTTP</label><br>
            <label><input type="radio" name="q5" value="TCP">TCP</label><br>
            <label><input type="radio" name="q5" value="ICMP">ICMP</label><br>
            <label><input type="radio" name="q5" value="SMTP">SMTP</label><br>
            <span id="q5"></span>
          </p><br>
          <p>6.To know the MAC address of my machine,following utility can be used<br>
            <label><input type="radio" name="q5" value="PING">PING</label><br>
            <label><input type="radio" name="q5" value="IPCONFIG">IPCONFIG</label><br>
            <label><input type="radio" name="q5" value="TraceRt">TraceRt</label><br>
            <label><input type="radio" name="q5" value="None of the above">None of the above</label><br>
            <span id="q6"></span>
          </p><br>
          <p>7.NETSTAT is used to<br>
            <label><input type="radio" name="q5" value="know the active TCP connections">know the active TCP connections</label><br>
            <label><input type="radio" name="q5" value="know the DHCP server details">know the DHCP server details</label><br>
            <label><input type="radio" name="q5" value="know DNS addresses">know DNS addresses</label><br>
            <label><input type="radio" name="q5" value="Hardware address">Hardware address</label><br>
            <span id="q7"></span>
          </p><br>
          <p>8.To know IPaddress of a server,following utility can be used<br>
            <label><input type="radio" name="q5" value="IPConfig">IPConfig</label><br>
            <label><input type="radio" name="q5" value="PING">PING</label><br>
            <label><input type="radio" name="q5" value="nslookup">nslookup</label><br>
            <label><input type="radio" name="q5" value="netstat">netstat</label><br>
            <span id="q8"></span>
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