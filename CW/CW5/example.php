<html><head><title>Inventory Add</title>
</head><body>
<?php
$invent = array('Nuts'=>44, 'Nails'=>34, 'Bolts'=>31);
if ($Action == 'Add'){
	$item=$invent["$index"];
	if (isset($invent["$index"])) {
		print "Sorry, already exists $index <br>";
	}else{
		$invent["$index"] = $Value;
		print "Adding index=$index value=$Value <br>";
		print '-----<br>';
		foreach ($invent as $index => $item) {
			print "Index is $index, value is $item.<br> ";
		}
	}
}else{ print "Sorry, no such action=$Action<br>"; }
?></body></html>