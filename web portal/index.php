<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
    <!-- Bootstrap core CSS -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
    <script src="jquery-1.9.1.min.js"></script>
      <style>
      .banner { background-color: #686868; }
        #topbar
        {
          background-color: #686868;
          padding-top: 70px;
          padding-bottom: 20px;
        }
        .wrapper { width: 30%;
    	margin: 0 auto; }
    	.banner p {
		  text-align: center;
		  margin-top: -10px;
		  display: block;
		 }
		 .banner img {
		  float: left; 
		  margin: 5px;
		 }
		  .banner span {
  padding-top: 50px;
  vertical-align:top;
 }
  .banner .ban2 span {
  padding-top: 50px;
  vertical-align:top;
 }
		        td.rightGap
		{
			padding-right: 3em;
		}
		.popupBox {
		    display:none;
		    position: absolute;
		    width: 60%;
		    height: 80%;
		    left: 20%;
		    top: 12%;
		    background-color: white;
		    color: black;
		    border: 2px solid black;
		    border-radius: 10px;
		    z-index: 10;
		}
		#overLay {
		    display:none;
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    background-color: #707070;
		    opacity: 0.7;
		    z-index: 9;
		    left: 0;
		    top: 0;
		}
		tr.spaceUnder > td
		{
		  padding-bottom: 4em;
		}
				
		</style>
    <link rel="stylesheet" href="style.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

    <script>
    $(function() {
        $( "#sortable" ).sortable({ 
            placeholder: "ui-sortable-placeholder" 
        });
    });
    </script>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div id="page">
      <div id="maincontent">
        <div class="banner" id="topbar" style="color:#FFFFFF;">
          <center>
          <h1>Institution Management System</h1>
          <br>
<div class="banner">
    <div class="wrapper">
<p style="color: #fff;"><img src="images/logo1.gif" style="width:80px; height:80px"><span style=""><h5>Rashtreeya Sikshana Samithi Trust</h5></span>
         <span class="ban2"><h4><b>R V College of Engineering</b></h4></span>
         <span class="ban2"><h6>Mysore Road,RV Vidyaniketan Post,Bangalore-560 059</h6></span></p>        
    </div>
</div>
          </center>
          <div align="right">
          <div id="overLay"></div>
		    <div class="popupBox" id="xPopup">
		    		<div style="background-color:#686868; color:#FFFFFF;padding-top:10px"><h1 align="center">Insert New Module</h1><br/><br/></div>
		    <hr>
	<form align="center" method="post" action="add_module.php">
		<table align="center">
		<tr class="spaceUnder">
			<td class="rightGap" align="left">Project Name:</td>
			
			<td class="rightGap" align="left"><input id="name" name="name" type="text" size="30px"> </td>

		</tr>
		<tr class="spaceUnder">
			<td class="rightGap" align="left">Brief Description:</td>
			<td class="rightGap" align="left"><input id="details" name="details" type="text" size="30px" maxlength="500"></td>

		</tr>
		<tr class="spaceUnder">
			<td class="rightGap" align="left">Home Page Full Path Name:</td>
			<td class="rightGap" align="left"><input id="path" name="path" type="text" size="30px"></td>
		</tr>
		</table>
		<button type="submit">Add Module</button>
	</form>
		    </div>
			<button><a href="#" class="listAttractions" id="x">Add module</a></button>
		    <br />
		  </div> 
          </div>

        <br>
        <br>
        <br>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      <table style="width: 100%;">
      <?php 
        $con = mysql_connect('localhost', 'root', 'root');
		$db = mysql_select_db('management');
        $query = "SELECT * FROM module WHERE 1";
        $res=mysql_query($query);
        $rows = mysql_num_rows($res);
        if($rows>0){
        	$i=0;
        	$string = '';
        while($result=mysql_fetch_array($res)){
        	
        	if($i%4 == 0)
        		$string .= "<tr id='sortable' class='spaceUnder'>";
          $string .= "<td><div class='ui-state-default' align='center'>
          <img class='img-circle' src='data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='' 
          alt='Generic placeholder image' width='140' height='140'>
          <h2>".$result['name']."</h2>
          <p>".$result['details']."</p>
          <p><a class='btn btn-default' href='../".$result['path']."' role='button'>View &raquo;</a></p>
        </div><!-- /.col-lg-4 --></div></td>";
        if($i%4 == 2)
        	$string .= "</tr>";
        $i=$i+1;
        }
        echo $string;
      }
      else{
        echo "No Registed modules";
      }
      ?>
        </table>
        

      <!-- START THE FEATURETTES -->
    </div>
    </div>
    </div>
 <script>
var overlay = document.getElementById("overLay");
var xpopup = document.getElementById("xPopup");
//var ypopup = document.getElementById("yPopup");

document.getElementById("x").onclick = function () {
    overlay.style.display = "block";
    xpopup.style.display = "block";
};
overlay.onclick = function () {
    overlay.style.display = "none";
    xpopup.style.display = "none";
};
 </script>
  </body>
</html>
