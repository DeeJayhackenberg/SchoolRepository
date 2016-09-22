<?php
$First = $_GET['First'];
$Last = $_GET['Last'];
$Pass = $_GET['YouMayPass'];
$Payment = $_GET['style'];
$Email = $_GET['Email'];
if (isset($_GET['Gender']))
{
	$Gender = $_GET['Gender'];
	echo $Gender."<br/>";
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Please enter your gender.");';
	echo 'window.location = "quiz.php";';
	echo '</script>';
}
if (!empty($First) && !empty($Last))
{
echo $First." ";
echo $Last."<br/>";
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Please enter your name.");';
	echo 'window.location = "quiz.php";';
	echo '</script>';
}
if (!empty($Pass))
{
	echo "Here is your password keep it safe: ".md5($Pass)."<br/>";
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Please enter a password.");';
	echo 'window.location = "quiz.php";';
	echo '</script>';
}
if (isset($_GET['food']))
{
	$Fooditems = $_GET['food'];
	echo "Your order: ";
	foreach ($Fooditems as $value)
	{
		echo " ".$value;
	}
echo "<br/>";
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Please enter your order.");';
	echo 'window.location = "quiz.php";';
	echo '</script>';
}

$atsign = strpos($Email,'@');
$period = strpos($Email,'.');
$Username = substr($Email,0,$atsign+1);
$Domain = substr($Email,$atsign+1,$period-($atsign+1));
$ProtcolID = substr($Email,$period+1);
if(!empty($Username) && !empty($atsign) && !empty($period) && !empty($ProtocolID) ){
echo $Username." ";
echo $Domain." ";
echo $ProtcolID." ";
echo $period . " ". $atsign;
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Please enter your Email address.");';
	echo 'window.location = "quiz.php";';
	echo '</script>';
}
?>
