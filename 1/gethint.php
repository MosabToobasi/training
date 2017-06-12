<?php
sleep(5);
$a[] = "iphone";
$a[] = "nokia";
$a[] = "dell";
$a[] = "acer";
$q = $_GET["q"];
$hint = "";
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "<span style='color:red'>no suggestion</span>" : $hint;
?>