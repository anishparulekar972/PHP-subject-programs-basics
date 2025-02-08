<?php
echo "Anish Parulekar - 19203A0048";
echo "<br>";
echo "<br>";
echo "<body style='background-color: yellow'>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['mail-submit'])) {
	   echo "Your mail id is : ".$_POST['email'];
	}
}
?>
