<?php
header('charset=uft-8');
echo "<table border='1'>";
foreach ($_SERVER as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . '</td><td>' . $value . '</td>';
    echo "</tr>";
}
echo "</table>";
