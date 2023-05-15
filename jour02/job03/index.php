<?php
for ($i = 0; $i <= 1000; $i++)
if ($i == 0 || $i == 20) {
    continue;
}
echo $i . "<i>";
if ($i == 25 || $i == 50) {
    continue;
}
    echo $i ."</u> "
?>