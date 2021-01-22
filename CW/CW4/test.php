<!DOCTYPE html>
<html>
<body>


	<form action="test.php" method="get">
        Enter a value: <input type="number" name="$n">
        <input type="submit">
    </form>
    <br>
    <?php  
        function triangle($n){
            for ($x = 0; $x < $n; $x++) {
                for($y = 0; $y <= $x; $y++){	
                    echo "*";   
                }
                echo "<br>";
            }
        }

?>  
<?php echo $_GET["triangle($n)"] ?>


</body>
</html>
