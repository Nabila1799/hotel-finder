<!DOCTYPE html>
<html>
<head>
<title>Hotel Search</title>
 <link rel="shortcut icon" type="image/jpg" href="icon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("image/scenery.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  
}
</style>
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}
.next {
  background-color: grey;
  color: black;
}
</style>
</head>

<body>

<div class="bg-image"></div>

<div class="bg-text">
  <iframe src="https://free.timeanddate.com/clock/i7wyorvc/n122/fn6/fs20/fcfff/tc000/ftbi/bas2/bat0/bacfff/pa8/tt0/tw1/th1/tb4" frameborder="0" width="262" height="64"></iframe>
  <h1 style="font-size:50px">Thank you for using me!</h1>

 <a href="index.php" class="next">  HOME  </a>
</div>

</body>
</html>
