<?php
echo "Anish Parulekar - 19203A0048";
echo "<br>";
echo "<br>";
echo "<body style='background-color: yellow'>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(empty($_POST['name']))
	{
		echo "Name can't be blank<br/>";
	}	
	if(!is_numeric($_POST['mobileno']))
	{
		echo "Enter valid Mobile Number<br/>";
	}
	$pattern ='/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
	if(!preg_match($pattern,$_POST['email']))
	{
		echo "Enter valid Email ID.<br/>";
	}  
}
?>
