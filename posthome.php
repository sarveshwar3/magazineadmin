<?php 
 $db = mysqli_connect("localhost","root","","post");
 if(isset($_POST["editedpost"])){
 $post_id=$_POST["postid"];
   	$post_title = $_POST["posttitle1"];
$post_intro = $_POST["postintro1"];
$post_desc = $_POST["postdesc1"];
$post_author = $_POST["postauthor1"];
$post_img = $_POST["postimg1"];
echo $post_title;
$updatequery = "UPDATE `posttable` SET `post_title`='$post_title',`post_intro`='$post_intro',`post_desc`='$post_desc',`post_author`='$post_author',`post_img`='$post_img' WHERE`postid`=$post_id";
mysqli_query($db,$updatequery);
header("Location:/post.php");
 }
 else{
$post_title = $_POST["posttitle"];
$post_intro = $_POST["postintro"];
$post_desc = $_POST["postdesc"];
$post_author = $_POST["postauthor"];
$post_img = $_POST["postimg"];
echo $post_title;
$insertquery = "INSERT INTO `posttable`(`postid`, `post_title`,`post_intro`, `post_desc`, `post_author`,`post_img`) VALUES (null,'$post_title','$post_intro','$post_desc','$post_author','$post_img')";
mysqli_query($db,$insertquery);
header("Location:/post.php");
}
?>
<html>
<head>
	<title>Page Title</title>
</head>
<body>



</body>
</html>
