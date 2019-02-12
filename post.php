<?php 
$db = mysqli_connect("localhost","root","","post");
$query = "select * from posttable";
$results = mysqli_query($db,$query);

?>
<?php if(isset($_POST["delete"])){
$postdelete = $_POST["delete"];
	$deletequery = "DELETE FROM `posttable` WHERE `postid`=$postdelete";
	mysqli_query($db,$deletequery);
}?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<title> TechMags </title>
</head>
<body>
<?php if(isset($_POST["edit"])){
  $postid = $_POST["edit"];
  $query1 = "select * from posttable where postid=$postid";
  $edits =  mysqli_query($db,$query1);
 ?>
	<div class="container">
	<?php while($rows = mysqli_fetch_array($edits)){ ?>
<form action="/posthome.php" class="form-group" method="post">
<label class="form-text">Post Heading </label>
<input type="text" name="posttitle1" value="<?php echo $rows[1]; ?>" class="form-control">
<label class="form-text">Post Introduction to display in the main page </label>
<input type="text" name="postintro1" value="<?php echo $rows[2]; ?>" class="form-control">
<label class="form-text">Post description</label>
<textarea type="text" name="postdesc1" class="form-control"><?php echo $rows[3]; ?></textarea>
<label class="form-text">Author</label>
<input type="text" value="<?php echo $rows[4]; ?>" name="postauthor1" class="form-control"></input>
<label class="form-text">Post Image</label>
<input type="text" value="<?php echo $rows[5]; ?>"name="postimg1" class="form-control">
<input type="text" value="<?php echo $rows[0]; ?>" name="postid" hidden>
<center><br><input type="submit" name="editedpost" class="btn btn-primary"></center>
</form>
</div>
<?php
} //for while
 } //for isset
else{
?>

<div class="container">
<form action="/posthome.php" class="form-group" method="post">
<label class="form-text">Post Heading </label>
<input type="text" name="posttitle" class="form-control">
<label class="form-text">Post Introduction to display in the main page </label>
<input type="text" name="postintro" class="form-control">
<label class="form-text">Post description</label>
<textarea type="text" name="postdesc" class="form-control"></textarea>
<label class="form-text">Author</label>
<input type="text" name="postauthor" class="form-control"></input>
<label class="form-text">Post Image</label>
<input type="text" name="postimg" class="form-control">
<center><br><input type="submit" class="btn btn-primary"></center>
</form>
</div>
<!------------------------------------------------------------  -->
<?php } ?>


<div class="container">
<?php while($rows = mysqli_fetch_array($results)){ ?>
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
	  <form action="post.php" method="post">
	  <input type="text" name="edit" value="<?php echo $rows[0]; ?>" hidden >  
	  <input type="submit" class="btn btn-warning" value="Edit">
	  </form>
	    <form action="post.php" method="post">
	  <input type="text" name="delete" value="<?php echo $rows[0]; ?>" hidden >  
	 	  <input type="submit"  class="btn btn-danger" value="Delete">
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

<pre><?php echo $rows[2]; ?></pre> <!-- used to preserve the line breaks when typing the paragraphs. -->
</body>
</html>
<?php

?>