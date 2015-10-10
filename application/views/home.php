<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="./public/music.js"></script>

</head>
<body>
	

<h1>Home</h1>
<h4><?php echo $exampleName;?></h4>

<p>Send Jon a Message</p>
<h3>List:</h3>
<?PHP for ($i=0; $i < count($messages) ; $i++) { ?>
	
<h3>From:</h3>
<h4><?php echo $from[$i];?></h4>
<p><?php echo $messages[$i];?></p>
<br>


<?php }?>
<br>
<a href="http://localhost:8888/goldenMusic/index.php/main/requestForm">Send Kase a Message</a>

</body>
</html>


