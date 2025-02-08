<?php
echo "Anish Parulekar - 19203A0048";
echo "<br>";
echo "<br>";
echo "<body style='background-color: yellow'>";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['btnDelete'])) {
        echo "Delete Button is clicked";
    } else {
        echo "Save Changes Button is clicked";
    }
}
?>

