<?php 
$db = mysqli_connect("localhost","root","","post");
$query = "select * from posttable";
$results = mysqli_query($db,$query);

?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<title> TechMags </title>
<style>
#header{
	color:red;
}
#body{
	background-color:violet;
}
</style>
</head>
<body id="body">
<div class="container">
<?php while($rows = mysqli_fetch_array($results)){ ?>
<br>
<div class="shadow lg card">
  <div class="card-header bg-primary text-white">
  <?php echo $rows[1]; ?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
	<div class="row">
	<div class="col-md-4">
	<p><img class="img-thumbnail" src = "<?php echo $rows[5]; ?>"></p>
	</div>
	<div class="col-md-8">
      <pre><?php 	echo $rows[3];  ?></pre>
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

<?php } ?>
</div>
</body>
</html>
