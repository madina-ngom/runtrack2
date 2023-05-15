<?php

$variable1 = array("type" => "Entier", "nom" => "variable1", "valeur" => 10);
$variable2 = array("type" => "Chaîne", "nom" => "variable2", "valeur" => "Hello");
$variable3 = array("type" => "Booléen", "nom" => "variable3", "valeur" => true);


echo "<table>";

echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";

echo "<tbody>";
echo "<tr><td>" . $variable1['type'] . "</td><td>" . $variable1['nom'] . "</td><td>" . $variable1['valeur'] . "</td></tr>";
echo "<tr><td>" . $variable2['type'] . "</td><td>" . $variable2['nom'] . "</td><td>" . $variable2['valeur'] . "</td></tr>";
echo "<tr><td>" . $variable3['type'] . "</td><td>" . $variable3['nom'] . "</td><td>" . $variable3['valeur'] . "</td></tr>";
echo "</tbody>";
echo "</table>";
?>