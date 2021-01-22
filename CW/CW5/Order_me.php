<!--Justin Choi php code
-->
<html>
<body>

<h1>Henry Fav Restaurant</h1>

<h2>Order Results</h2>

Order processed at <?php 
date_default_timezone_set("America/New_York");
echo date("h:i:sa, d m Y");  ?><br><br>
Your order is as follows: <br><br>

<?php
$plates = $_POST["Plate1"] + $_POST["Plate2"] + $_POST["Plate3"];

if($plates == 0){
	print ("Plates ordered: 0 <br> You did not order anything on the previous page!<br>");
}else{
	print ("Plates ordered: $plates <br>");
}
?>
<?php
$subtotal = $_POST["Plate1"]*2100 + $_POST["Plate2"]*199 + $_POST["Plate3"]*899;
$total = $subtotal + $subtotal*.1;
print "Subtotal: $$subtotal <br>";
print "Total including tax: $$total <br><br>";
?>

Customer referred by <?php echo $_POST["find"]."."; ?>
</body>
</html>

