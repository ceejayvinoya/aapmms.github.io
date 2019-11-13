<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="w3.css">
   <script type="text/javascript" src="jquery.min.js"></script>
   <script type="text/javascript" src="chart.min.js"></script>
   <script type="text/javascript" src="app.js"></script>
   <title>AAPMMS - DLSUD</title>
   <style type="text/css">
      #chart-container {
        width: 60%;
        float: left;
        position: relative;
        height: 360px;
        margin: 25px;
        padding: 20px;
        border: 3px solid blue;
        background-color: white;
      }
      #aqi-container {
         width: 30%;
         float: right;
         position: relative;
         height: 360px;
         margin: 25px;
         padding: 20px;
         border: 3px solid green;
         background-color: white;
      }
      body {
        background-color: khaki;
      }
      h2 {
        text-align: center;
      }
    </style>
</head>

<body onLoad="buildHtmlTable()">

<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li><a href='info.php'><span>Tables</span></a></li>
   <li class='last'><a href='about.html'><span>About</span></a></li>
</ul>
</div>
<div>
   <h2>Automated Air Pollution Monitoring and Mitigation System</h2>
   </div>
<div id="chart-container">
   <canvas id="mycanvas"></canvas>
   </div>
   <div id="aqi-container">
      <?php
    //LOGIN TO MYSQL DATABASE
         $servername = "ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
         $username = "yfxtv65r19dk2qm0";
         $password = "rkiww4updt427u90";
         $database = "hu1al3cymer6fwfu";
         $conn = new mysqli($servername, $username, $password, $database);
         if($conn->connect_error){
            die("</table> Connection Failed: " . $conn->connect_error);
         }
         $sql="SELECT * FROM insensor ORDER BY id DESC LIMIT 1";
         $result=$conn->query($sql);
         echo "<h2 style='background-color:chartreuse;'>SAFE</h2>";
         echo "<h2 style='background-color:chartreuse;'>" . $row["apm25"]. "</h2>";
      ?>
   </div>
   <br>
   <br>
</body>
</html>
