<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('');
        background-size: cover;
        }
        #menu-outer {
	height: 84px;
	background: url(images/bar-bg.jpg) repeat-x;
}

.table {
	display: table;   /* Allow the centering to work */
	margin: 0 auto;
}

ul#horizontal-list {
	min-width: 696px;
	list-style: none;
	padding-top: 20px;
	}
	ul#horizontal-list li {
		display: inline;
	}
         ul.nav {
  padding-left: 0px;
  background-color:white;
  text-align: center;
  font-size: 50px;
}
ul.nav > li {
  display: inline-block;
  padding: 10px 20px;
}
ul.nav > li:hover {
  background-color:lightpink;
}
ul.nav > li > a {
  color: coral;
  text-decoration: none;
}
 
</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:aliceblue;">LoginAsUser</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Welcome To Admin Dashbord</h1>
</div>
   
<ul class="nav">
    <br><!-- comment -->
    <br>
    <img src="../images/admin.jpg" height="80" alt="CoolBrand">
  <li><a href="/home">Update</a></li>
  <li><a href="/home">View</a></li>
  <li><a href="/blog">Insert</a></li>
  <li><a href="/blog">Notify</a></li>
</ul>
  
</<body>
 
</<html>
   