<?php
use App\Model;

echo "<table><tr><th>Id</th><th>Tittle</th><th>About</th></tr>";
echo "<tr>";
echo "<td>" . $data[0]["id"] .  "</td>";
echo "<td>" . $data[0]["tittle"] . "</td>";
echo "<td>" . $data[0]["index"] . "</td>";
echo "<td>" . $data[1]["id"] . "</td>";
echo "<td>" . $data[1]["tittle"] . "</td>";
echo "<td>" . $data[1]["index"] . "</td>";
echo "</tr>";
echo "</table>";
?>