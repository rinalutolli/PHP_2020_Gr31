<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sports</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
  $("#button2").click(function(){
    $("#image1").fadeToggle(1000);
  });
});
</script>
      <script>
 var links = ["","","","","","","",""];
        var images = ["./images/topi.jpg","./images/kids.jpg",
    "./images/stadiumi.jpg", "./images/lala.jpg",
    "./images/kupa.jpg","./images/tenis.jpg",
    "./images/ath.jpg","./images/golf.jpg"];
        var i = 0;
        var renew = setInterval(function(){
            if(links.length == i){
                i = 0;
            }
            else {
            document.getElementById("bannerImage").src = images[i]; 
            document.getElementById("bannerLink").href = links[i];
            i++;

        }
        },1200);
    
    </script>

    <script>
function myFunction1() {
  var message, x;
  message = document.getElementById("p01");
  message.innerHTML = "";
  x = document.getElementById("demo1").value;
  try { 
    if(x == "")  throw "empty.";
    if(x=="Germany" || x=="germany") throw "right.";
    if(x!="Germany") throw "wrong.";
  }
  catch(err) {
    message.innerHTML = "Input is " + err;
  }
}
</script>


<script>
function myFunction() {
  var x, text;

  x = document.getElementById("numb").value;


  if (x==6) {
    text = "Correct!";
  } else {
    text = "Wrong, the right answer is 6.";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
<style>
* {box-sizing: border-box;}

.container {
  position: relative;
  width: 100%;
}

#image4 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); / Black see-through /
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 15px;
  margin: 0 0 3.8px; 0;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
</style>


  <style>
    .grad {
  background-image: linear-gradient(to bottom, #91F4EA, white);}

  </style>

  <style>
  #image:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

  </style>


  <meta charset="UTF-8">

  <link rel="stylesheet" href="./css/cssvesa.css">
  <script type="text/javascript" src="./js/js.js"></script>
</head>
<body>
   <header>
    <div id="u1">
    <nav id="mainMenu">
    <ul><?php
      $links = array(
               array("Sign Up","//localhost/projekti/signup.php"),
               array("Sign In","//localhost/projekti/login.php"),
               array("Contact Us","#copyright"),
               array("Feedbacks","//localhost/projekti/feedbacks.php")
               );

              foreach ($links as $urlitem){ 
              echo "<li><a href='       ".$urlitem[1]."'>  ".$urlitem[0].  "</a></li>"; 

              }
?>
 <li><a href="ajax.php" style=" float: right; margin-right: 30px;">Team</li></a>
       </ul>
   </nav>
 </div>
  <h1><?php
       define("Emri", "MAG MAGAZINE");
       echo Emri;
       ?> </h1>
   <h3><?php $faqet = array("ALL THE LATEST NEWS & INFORMATIONS IN THE WORLD", "FASHION", "SPORTS"); echo $faqet[2];?></h3>

   <nav id="secondaryMenu">
    <ul>
      <li><a href="homepage.php">HOMEPAGE</a></li> 
           <li><a href="fashion.php">FASHION</a></li>
           <li><a href="vesa.php">SPORTS</a></li>
           <li><a href="help.php">HELP</a></li>
           </ul>
   </nav>

  </header>
  <section>
    <div style="float:left; margin: 0 0 0 3em;">
      <h3 style="text-align: left; padding: 1.5em 0 0 1.5em">Interesting facts about football:</h3>
      <ol>
        <li>Football is the most watched and most played sport on earth.
          <ul>
            <li>It has 4 Billion Fans.</li>
          </ul>
        </li>
        <li &#233;>The <abbr title="F&#233d&#233ration Internationale de Football Association">FIFA</abbr> World Cup is the most-watched sporting event in the world.
        <ul>
          <li>The 2022 World Cup in Qatar will mark the first time <br>the tournament will be held in this county.</li>
          <li>The World Cup trophy went missing for 7 days in 1966 <br>when it was stolen just prior to the tournament.</li>
        </ul>
        </li>
        <li>Only Canadians and Americans call football as Soccer.</li>
        <li>During every game, Football players run an average of 9.65 km.
        </li>
        <li>Lightning killed an entire football team during a game in 1998.</li>
      </ol><br>
      <p style="margin: 0 0 0 5.3em; text-decoration: underline; "><b>Listen to UEFA Champions League Anthem</b></p>
      <audio style="margin: 1em 0 0 4.7em;" controls>
  <source src="./images/uefa.mp3" type="audio/mpeg">
  
</audio>
    </div>

    <div style="float: right; margin: 0 3em 0 0;">
     <div style="float:right;">
     <a id="bannerLink" href="#">
     <img style="margin: 1em 0 0 3em; margin-right: 5em;" id="bannerImage" src="./images/topi.jpg" width="400px" height="250px" alt="Image can't load."></a><br><br>

     <h3 style="margin: 10px 0 0 4em;">Who won the 2014 FIFA World Cup in Brazil?</h3>
<input style="margin: 10px 0 0 10em;"id="demo1" type="text">
<button type="button" onclick="myFunction1()">Submit</button>
<p style="margin: 10px 0 0 12em;" id="p01"></p>

     </div>
      
    </div> 

</section>


  <section>
    <table cellpadding="5" class="grad">
      <tr>
        <td colspan="3">
          <p style="text-align: center; font-size: '20px'; outline: groove; outline-color: #ededed; padding: 0.5em"><b>Premier League</b></p>
        </td>
      </tr>
      <tr>
        <td>
          <figure>
          <img id="image" src="./images/inter.jpg" alt="Image can't load.">
          <figcaption style="text-align: center; font-size: 18px" ><b>Inter Milan ready to bid £25m for Chelsea star</b></figcaption>
        </figure>
        </td>
        <td>
          <figure>
          <img id="image3" src="./images/chelsea.jpg" alt="Image can't load.">
          <figcaption style="text-align: center; font-size: 18px" ><b>West Ham: David Moyes plans hardline approach with players </b></figcaption>
        </figure>
        </td>
        <td>
          <figure>
          <div class="container">
      
          <img id="image4" src="./images/liverpool.jpg" alt="Image can't load.">
          <div class="overlay">Adam Lallana</div></div>
          <figcaption style="text-align: center; font-size: 18px" ><b>Lallana calls on Premier League leaders not to ‘take foot off the gas’</b></figcaption>
             
        </figure>
        </td>
      </tr>

        <tr>
          <td>
            <p>Inter Milan are prepared to offer Chelsea £25m for Emerson Palmieri, but any move will hinge on whether Frank Lampard’s side can bring in a replacement in January. Emerson was sacrificed after just 34 minutes during Chelsea’s 2-1 win against Arsenal on Sunday when Lampard reverted to a back-four.</p>
          </td>
           <td>
            <p>David Moyes will repeat his hardline approach at West Ham after admitting he has a sense of deja vu. Moyes has agreed an 18-month deal to return as Hammers manager, 18 months after owners David Sullivan and David Gold showed him the door despite the Scotsman saving them from relegation.</p>
          </td>
           <td>
            <p><abbr title="Premier League">PL</abbr> leaders Liverpool are determined not to let complacency creep into the hunt for their first domestic league title in 30 years, midfielder Lallana has said. The Merseyside club are on 55 points with 19 game
            s left to play and 14 ahead of defending champions Manchester City, who have both played a game more.</p>
          </td>
        </tr>
      </table>
    </section>

    <section style="border-bottom: groove;">
    <div style="margin: 0 0 3em 0;">
      <h3 style="text-align: center; margin: 3em 0 0 0 ;">Top moment of the week in NBA</h3>
    <video width="550px" height="310px" style="margin: 3em 0 0 25em " controls>
    <source src="./images/basket.mp4" type="video/mp4">   
    </video>
 
  </section>

     <section id="sec1">
      <div>

  
  
      <div style="float:left; margin: 0 0 0.9em 8em;">
      
      <h3 style="text-align: center">FIFA World Player of the Year</h3>
      <h2 style="text-align: center">Lionel Messi</h2>


      <button id="button2" style="margin: 0 9em;">Click to fade</button><br><br>

       <div id="result" style="text-align: center;"></div>
       <img id ="image1"src="./images/messi.jpg" alt="Image can't load.">
      </div>


    <div style="float:right; margin: 0 6em 0 0; ">

      <h3 style="text-align: center">QUIZ</h3>
      <p style="text-align: center"> How many times did Lionel Messi win Ballon d'Or?</p>
      <input id="numb" type="Number" style="margin: 0 0 0 6em;">
      <button type="button" onclick="myFunction()">Submit</button><br>
      <p id="demo" style="text-align: center"></p>
      
      <img id ="image2"src="./images/ballondor.jpg" alt="Image can't load.">



  </div>
        </div>
  </section>


  
  

</body>

</html>

