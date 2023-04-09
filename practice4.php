<?php
if($_POST) {$number = $_POST["size"];
echo "<h2>Multiplication Table</h2>";
echo "<table border =\"2\">";
echo "<tr>";
echo "<td></td>";

for ($column = 1; $column <= $number; $column++) {echo "<td> $column </td>";}

echo "</tr>";

for ($row=1; $row<=$number; $row++) {echo "<tr>"; echo "<td>$row</td>";

for ($column =1; $column <= $number; $column ++) {$p = $column * $row; echo "<td>$p</td>";}echo "</tr>";} echo "</table>";}
?>