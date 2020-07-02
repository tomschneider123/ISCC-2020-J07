<?php

$date1 = new DateTime();
$date2 = new DateTime('2020-06-22 09:00');
$diff = abs(strtotime($date2) - strtotime($date1));
echo "<p>",$date1->format('Y/m/d à H:i:s'),"</p>";
echo "<p>",$date2->format('Y/m/d à H:i:s'),"</p>";

$intervalle = $date1->diff($date2);
echo "<p>",$intervalle->d, " Jours,", $intervalle->h," Heures,", $intervalle->m," Minutes depuis le début de la piscine.</p>";

?>