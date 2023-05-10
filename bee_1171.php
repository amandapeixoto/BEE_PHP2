<?php
$n = intval(fgets(STDIN));
$freq = array();
for ($i = 0; $i < $n; $i++) {
    $Snum = intval(fgets(STDIN));
    if (array_key_exists($num, $freq)) {
        $freq[$num] += 1;
    } else {
        $freq[$num] = 1;
    }
}
ksort($freq);
foreach ($freq as $num => $count) {
echo "$num aparece $count vez(es)".PHP_EOL;
}

?>