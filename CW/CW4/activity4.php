<!DOCTYPE html>
<html>
<body>

<?php

function word_count($str) {

	$count=1;
	for($i=0;$i<=strlen($str);$i++){
		$char=substr($str,$i,1);
		if(ctype_space($char)){
			$count++;
        }
	}
	echo $count;
}
echo "This is a test for counting how many words this sentence is.";
echo "<br>";
echo "Number of words: ";
word_count("This is a test for counting how many words this sentence is.");
?>

</body>
</html>