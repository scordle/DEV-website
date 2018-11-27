<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<!-- 
	Author: Scott Cordle
	Original Date: 09/28/2012
	Updated: 
	
	NOTE: This is a free website template called Variant Rounded, originally 
		designed as an exclusive template through the Style Master CSS 
		editor. Variant Rounded was built by Andreas Viklund, and it is free
		to download and free to use. All I ask for in return is that you keep 
		the credit link in the footer.

		The code in this template is valid XHTML 1.0 Strict. It has basic 
		accessibility features included, and includes basic styles for porting 
		the template into themes for content management systems and blog engines. 
		Please note that this template version does not include any CMS-specific 
		code, it is plain XHTML/CSS and it will not work with any CMS without 
		proper modifications. It will however work well to build static HTML 
		websites from, and you are more than welcome to use it as wanted. To 
		learn more about using templates, visit http://andreasviklund.com!
-->
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="This website hosts student work for the 
		CS department at Sullivan University in Louisville, KY" />
	<meta name="keywords" content="" />
	<meta name="author" content="Scott Cordle" />
	<link rel="stylesheet" type="text/css" href="styles/variant-rounded.css" 
	  title="Variant Rounded" media="screen,projection" />
	<title>CSC322 Web Programming</title>
</head>

<body>
 
<?php
	include("includes/createlist.inc");
?>

<!-- <a href="../astudent">Student, Alpha (example student account)</a> -->
<div id="wrap">

<div id="header">
	<p class="hide">skip to: <a href="#content">content</a> | 
	<a href="#sitemenu">navigation</a><br /></p>
	<!--  <img src="images/flame.gif" alt="Sullivan flame" />  -->
	<h1><a href="#">Computer <span class="color">Science</span> Department</a></h1>
	<p id="slogan">College of Information and Computer Technology</p>
</div>

<?php include("includes/menus.inc"); ?>



<div id="content">
	<h2>CSC322 Web Programming</h2>
	<p>This website hosts student work for the CS department at Sullivan 
		University in Louisville, KY.  All of the work hosted here has been
		created to fulfill some form of academic work.  Student websites are
		the sole responsibility of the student. </p>
	<p>Select a student from the list below to see his/her work.</p>

	<h3>Fall 2016 - Instructor <a href="../scordle">Scott Cordle</a></h3>
	<a href="#">  ** Student, Zoltan **  (instructor demonstration account)</a><br />
	<a href="KBORNS1194">Borns, Karl</a><br />
	<a href="SDAVIS9642">Davis, Stephen</a><br />
	<a href="EGENTR5674">Gentry, Evan</a><br />
	<a href="AGRANA5395">Grando, Alfredo</a><br />
	<a href="PLEE5193">Lee, Patrick</a><br />
	<a href="JNIXON3308">Nixon, Joseph</a><br />
	<a href="TBERRY4085">Pueschel, Michelle</a><br />
	<a href="MWATAN8019">Watanabe, Mark</a><br />




<!-- the following code was excluded July 2016 due to a server migration

	<h3>Fall 2014 - Instructor <a href="../scordle">Scott Cordle</a></h3>
	<?php
	   linklist("201404fallCSC322.txt", "");
	?>

	<h3>Fall 2013 - Instructor <a href="../scordle">Scott Cordle</a></h3>
	<?php
	   linklist("201304fallCSC322.txt", "");
	?>
	
	<h3>Winter 2013 - Instructor <a href="../dleber">Dennis Leber</a></h3>
	<?php
	   linklist("csc322wi2013leber.txt", "");
	?>
-->

</div>

<?php include("includes/footer.inc"); ?>

</div></body>
</html>
