Hi from P2P community one one 7
<?php
echo "<br />";
if (isset($_GET['snacks'])){
$var = $_GET['snacks'];
foreach ($var as $value){
echo $value."<br />";
}
}
else{
echo "Sorry to hear that you won't be bringing any snacks <br />";
}
$Gamer = $_GET['Gamerfield'];
echo " and your Gamertag is ".$Gamer; 
?>
