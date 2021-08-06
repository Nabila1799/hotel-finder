<!DOCTYPE html>
<html>
  <head>
   
    <title>Hotel Search</title>
    <link rel="shortcut icon" type="image/jpg" href="icon.png"/>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./main.js"></script>
	 <script src="./algo.js"></script>
  </head>
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
  <body>
  <div class="header">
  <a href="#default" class="logo">Hotel Finder</a>
  <center><iframe src="https://free.timeanddate.com/clock/i7wyorvc/n122/fn6/fs20/fcfff/tc000/ftbi/bas2/bat0/bacfff/pa8/tt0/tw1/th1/tb4" frameborder="0" width="262" height="64"></iframe>
</center>
  <div class="header-right">
    
	 <a href="index.php">HOME</a>
   <a class="active" href="logout.php">LOG OUT</a>
  </div>
</div>

    <div id="map"></div>
 <div class="hotel-search">
      <div id="findhotels">Find hotels in:</div>

      <div id="locationField">
        <input id="autocomplete" placeholder="Enter a city" type="text" />
      </div>

      <div id="controls">
        <select id="country">
                
		   <option value="my" selected>Malaysia</option>
		  
        </select>
      </div>
	  
	  </div>
   
    <div id="listing">
      <table id="resultsTable">
        <tbody id="results"></tbody>
      </table>
    </div>

    <div style="display: none">
      <div id="info-content">
        <table>
          <tr id="iw-url-row" class="iw_table_row">
            <td id="iw-icon" class="iw_table_icon"></td>
            <td id="iw-url"></td>
          </tr>
          <tr id="iw-address-row" class="iw_table_row">
            <td class="iw_attribute_name">Address:</td>
            <td id="iw-address"></td>
          </tr>
          <tr id="iw-phone-row" class="iw_table_row">
            <td class="iw_attribute_name">Telephone:</td>
            <td id="iw-phone"></td>
          </tr>
          <tr id="iw-rating-row" class="iw_table_row">
            <td class="iw_attribute_name">Rating:</td>
            <td id="iw-rating"></td>
          </tr>
          <tr id="iw-website-row" class="iw_table_row">
            <td class="iw_attribute_name">Website:</td>
            <td id="iw-website"></td>
          </tr>
        </table>
      </div>
    </div>
	

  
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7_2cZv6eHaDoo7dzvpj981bHprotooj4&callback=initMap&libraries=places&v=weekly"
      async
    ></script>
	
	
  </body>
</html>