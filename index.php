<!DOCTYPE html>
<html>
<head>
<title>Hotel Search</title>
 <link rel="shortcut icon" type="image/jpg" href="icon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("image/scenery.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.header {
  overflow: hidden;
   background-image: url("image/header4.jpg");
  background-color: lightblue;
  padding: 30px 3px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 30px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: white;
  color: black;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}


</style>
<style>
/*utk gmbr bergerak*/
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}


</style>

</head>
<body>

 <div class="header">
    <a href="#default" class="logo">Hotel Finder</a>
	 <center><iframe src="https://free.timeanddate.com/clock/i7wyorvc/n122/fn6/fs20/fcfff/tc000/ftbi/bas2/bat0/bacfff/pa8/tt0/tw1/th1/tb4" frameborder="0" width="262" height="64"></iframe>
</center>
  <div class="header-right">
    <a class="active" href="homepages.php">NEXT</a>   
  </div>
 </div>


<div style="padding-left:20px">
    <center><p>“The world is a book and those who do not travel read only one page.”</p></center>


<center><div class="w3-content w3-section" style="max-width:800px">
  <img class="mySlides w3-animate-top" src="image/hotel2.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="image/hotel3.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="image/hotel6.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="image/hotel7.jpg" style="width:100%">
   <img class="mySlides w3-animate-bottom" src="image/hotel8.jpg" style="width:100%">
</div></center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>
</body>  
<br>


</body>
</html>
