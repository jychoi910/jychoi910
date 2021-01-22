<!DOCTYPE html>
<html>
<body>

<?php
function countWords($str){

$splitstring=explode(" ",$str);

$arrayCountWords = array();
foreach($splitstring as $word => $word_count){
	if (array_key_exists( $word_count , $arrayCountWords)){
		$arrayCountWords[$word_count]+=1;
	}
	else{
		$arrayCountWords[$word_count]=1;
	}
}
print_r($arrayCountWords);
}
echo "This is a sentence to test the function countWords to see how many times each word appears within this sentence";
echo "<br>";
$str =strtolower("This is a sentence to test the function countWords to see how many times each word appears within this sentence");
countWords($str);

?>

</body>
</html>