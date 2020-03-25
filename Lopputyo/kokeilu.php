<html>
    <head>
        
        <meta charset="UTF-8">
    </head>
    
    
</html>
    



<?php
$x= mt_rand(1, 10);
$y= mt_rand(1, 10);

function myTest() {
   global $x,$y;
   $a=$x+$y;
}



myTest(); // run function

echo "Paljonko on ", $x . " +", $y . " ?";
echo "<br>";
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Numero1: <input type="number" name="numero1"><br>    
<input type="submit">
</form>

<?php
$vastaus = $_POST['numero1'];
if ($vastaus === $a) {
    
    echo "Vastaus on oikein!";
} else {
    echo "Vastaus on väärin!";
    
}
    


?>