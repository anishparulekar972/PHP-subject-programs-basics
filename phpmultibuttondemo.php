<?php
echo "Anish Parulekar - 19203A0048";
echo "<br>";
echo "<br>";
echo "<body style='background-color: yellow'>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addbtn'])) {
        echo "Adition of these two numbers is :". ((int) $_POST['no1'] + (int) $_POST['no2']);
    } else if (isset($_POST['subbtn'])){
        echo "Subtraction of these two numbers is :". ((int) $_POST['no1'] - (int) $_POST['no2']);
    }
}
?>
