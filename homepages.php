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
  font-family: Arial, georgia, cursive;
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
h2 {
    font-size: 40px;
	
}
	.cursive{
			font-family:"Brush Script MT", Brush Script Std, cursive;
			}
</style>
<style>
/* utk buat polaroid tu*/
.polaroid-image {
	width: 100%;
	border-radius: 25px 25px 0 0;
	height: 30vh;
}
.polaroid {
	height: auto;
	width: 40%;
	margin: auto;
	background-color: white;
	border-radius: 25px;
	box-shadow: 2px 4px 8px 3px Gainsboro;
}
.caption {
	padding: 0 20px 20px 20px;
}

.polaroid {
	height: auto;
	width: 30%;
	background-color: white;
	border-radius: 25px;
	box-shadow: 2px 4px 8px 3px Gainsboro;
	margin: 1%;
	float: left;
}


/* Responsive (mobile-friendly) polaroids */
@media screen and (max-width: 650px) {
	.polaroid {
		width: 96%;
		margin: 2%;
	}


</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Hotel Finder</a>
  <center><iframe src="https://free.timeanddate.com/clock/i7wyorvc/n122/fn6/fs20/fcfff/tc000/ftbi/bas2/bat0/bacfff/pa8/tt0/tw1/th1/tb4" frameborder="0" width="262" height="64"></iframe>
</center>
  <div class="header-right">
    
    <a href="index.php">HOME</a>
   <a class="active" href="kt.php">SEARCH</a>
  </div>
</div>

 <center><h2  class="cursive">Welcome to Terengganu!</h2> </center>
 <center><h4>There are a few places that you must visit in Terengganu!</h4> </center>
<div class="polaroid">
	<img src="image/view.jpg" class="polaroid-image">
	<h3 class="caption">VIEW OF THE CITY</h3>
</div>

<div class="polaroid">
	<img src="image/masjid.jpg" class="polaroid-image">
	<h3 class="caption">CRYSTAL MOSQUE</h3>
</div>
<div class="polaroid">
	<img src="image/muzium.jpg" class="polaroid-image">
	<h3 class="caption">STATE MUSEUM</h3>
</div>
  <div class="polaroid">
	<img src="image/db.jpg" class="polaroid-image">
	<h3 class="caption">DRAWBRIDGE</h3>
</div>

<div class="polaroid">
	<img src="image/chinatown.jpg" class="polaroid-image">
	<h3 class="caption">CHINATOWN</h3>
</div>
<div class="polaroid">
	<img src="image/pasarpayang.jpeg" class="polaroid-image">
	<h3 class="caption">PASAR KEDAI PAYANG</h3>
</div>

</body>
</html>
