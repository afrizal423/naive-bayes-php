<?php $a = array(10, 20, 52, 105, 56, 89, 96);
$b = 0;
foreach ($a as $key=>$val) {
    if ($val > $b) {
        $b = $val;
    }
}
echo $b;
?>