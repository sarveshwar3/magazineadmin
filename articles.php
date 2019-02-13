
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bits & Bytes</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
function showtest(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("demores").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demores").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint3.php?q="+str, true);
  xhttp.send();   
}
function showrank(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("rank").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rank").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "rank.html?q="+str, true);
  xhttp.send();   
}
function res() {
showtest(1);
showrank(1);
}

</script>
<style>
#head{
	background-color:orange;
}
</style>
</head>
<body onload="res(1)">
<div class="main">


  <div class="header_block">
  
  
    <div class="header_resize">
	  
	  
	  
      <div class="menu_nav">
        <ul>
		  
          <li ><a href="index.php">Home</a></li>
		  <li><a href="message.php">Message</a></li>
		  <li><a href="articles.php">Articles</a></li>
          <li><a href="quiz.php">Quiz</a></li>
		   <li><a href="appbuzz.php">App Buzz</a></li>
          <li><a href="alumnitalk.php">Alumni Talk</a></li>
          <li><a href="corporatevoice.php">Corporate Voice</a></li>
          <li><a href="faultycorner.php">Faculty Corner</a></li>
          <li><a href="project.php">Project Expo</a></li>
        </ul><br><br>
		
  
      </div>
	  
	  
	  
      <div class="clr"></div>
  
  
  
  
<div class="menu_nav">
     
	    
		  <br><br><a href="index.php"><img src="images/new.png" alt="bits and bytes logo" style="width:width;height:height;"> </a></li>
        
		<div >
     
    </div>
  
      </div>
  
  
  
  
  
    </div><!--closing of header_resize-->  
  
  </div><!--closing of header_block-->
  
  
  <div class="clr"></div>
  
  
  
  <div class="header">
   
   
    
    <div class="clr"></div>
  
  </div><!--closinng of header-->
  
  <?php 
$db = mysqli_connect("localhost","root","","post");
$query = "select * from posttable";
$results = mysqli_query($db,$query);

?>
   <div class="container">
<?php while($rows = mysqli_fetch_array($results)){ ?>
<div class="shadow lg card">
  <div class="card-header text-white" id="head">
  <?php echo $rows[1]; ?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
	<div class="row">
	<div class="col-md-4">
	<p><img class="img-thumbnail" src = "<?php echo $rows[5]; ?>"></p>
	</div>
	<div class="col-md-8">
      <?php 	echo $rows[2];  ?>
	   <form action="postdescription.php" method="post">
	  <input type="text" name="postid" value="<?php echo $rows[0] ?>" hidden>
	  <input type="submit" class="btn btn-primary" value="Read More">
	  </form>
	  

	 </div>
	 </div>
      <footer class="blockquote-footer"><?php echo $rows[4]; ?></footer>
    </blockquote>
  </div>
</div>
<br>
<?php } ?>
</div>
    
	
	
	
	
	
	

	
	
   

   <head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>


</head>








  

<div class="footer">
  <div class="footer_resize">
    <p class="lf"></p>
    <div class="clr"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
<!------------------------------------------------------------------- -----     -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              
          
      <h2><span>University Rank Holders</span></h2>
	
        
<div class="w3-content w3-section" style="max-width:500px; text-align:center;">
  <div class="mySlides">
    <img class=" w3-animate-top" src="images/rankholder/rank1.png" >
	<p>AKSHAYA .R</p>
	<p>CGPA:<font color="#00FF00">8.98</font></p>
	<p>RANK:<font color="#00FF00">18</font></p>
  </div>

  <div class="mySlides">
    <img class=" w3-animate-bottom" src="images/rankholder/rank2.png" >
	<p>SWETHA.S</p>
    <p>CGPA:<font color="#00FF00">8.94</font></p>
    <p>RANK:<font color="#00FF00">22</font></p>
  </div>

  <div class="mySlides">
    <img class=" w3-animate-top" src="images/rankholder/rank3.png" >
	<p>GAYATHRI ELUMALAI</p>
    <p>CGPA:<font color="#00FF00">8.88</font></p>
    <p>RANK:<font color="#00FF00">28</font></p>
  </div>

  <div class="mySlides">
    <img class=" w3-animate-bottom" src="images/rankholder/rank4.png" >
	<p>KANISHKA.C</p>
    <p>CGPA:<font color="#00FF00">8.87</font></p>
    <p>RANK:<font color="#00FF00">29</font></p>
  </div>

  <div class="mySlides">
    <img class=" w3-animate-top" src="images/rankholder/rank5.png" >
	<p>NITHYA.R</p>
    <p>CGPA:<font color="#00FF00">8.74</font></p>
    <p>RANK:<font color="#00FF00">42</font></p>
  </div>

  <div class="mySlides">
    <img class=" w3-animate-top" src="images/rankholder/rank6.png" >
	<p>KEERTHANA.PR</p>
    <p>CGPA:<font color="#00FF00">8.70</font></p>
    <p>RANK:<font color="#00FF00">46</font></p>
  </div>
  
  <div class="mySlides">
    <img class=" w3-animate-top" src="images/rankholder/rank7.png" >
	<p>VAIJAYANTHI.A</p>
    <p>CGPA:<font color="#00FF00">8.68</font></p>
    <p>RANK:<font color="#00FF00">48</font></p>
  </div>
  
  <div class="mySlides">
    <img class=" w3-animate-top" src="images/rankholder/rank8.png" >
	<p>DIVYA.V</p>
    <p>CGPA:<font color="#00FF00">8.66</font>/p>
    <p>RANK:<font color="#00FF00">50</font></p>
  </div>
</div>

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
</div>
       
            <div class="col-md-4">
             <h2><span>Editors</span></h2>
	  <ul style="padding:10px; ">
  <li><p style="font-size:18px;">Dr.V.Subedha <font color="#00FF00" size="2">Professor & Head</font></p></li>
  <li><p style="font-size:18px;">Mr.T.A.Mohanaprakash <font color="#00FF00" size="2">Associate Professor</font></p></li>
  <li><p style="font-size:18px;">Mr.V.Gokula Krishnan <font color="#00FF00" size="2">Associate Professor</font></p></li>
  <li><p style="font-size:18px;">Mr.J.Mithilaesh <font color="#00FF00" size="2">IV Year CSE</font></p></li>
  <li><p style="font-size:18px;">Mr.G.Srinath <font color="#00FF00" size="2">IV Year CSE</font></p></li>
</ul>
            </div>
            <div class="col-md-4 col-xl-3">
             <h2><span>Coordinators</span></h2>
	  <ul style="padding:10px; ">
  <li><p style="font-size:18px;">Mrs.S.Hemamalini <font color="#00FF00" size="2">Associate Professor</font></p></li>
  <li><p style="font-size:18px;">Mr.I.Kalyyanasundar <font color="#00FF00" size="2">III Year CSE</font></p></li>
  <li><p style="font-size:18px;">Mr. J.Gowtham Kumar <font color="#00FF00" size="2">III Year CSE</font></p></li>
  <li><p style="font-size:18px;">Mr.R.Sanjay <font color="#00FF00" size="2">III Year CSE</a></font></li>
</ul>
            </div>
          </div>
        </div>
        
        
      </footer>

</body>
</html>