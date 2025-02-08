<html>
<body>
<?php
echo "Anish Parulekar - 19203A0048";
echo "<br>";
echo "<br>";
echo "<body style='background-color: yellow'>";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    echo "User Name is:<b> $name </b>";
    echo "<br>You can use this form again to enter a new name.";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="name"><br>
<input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
