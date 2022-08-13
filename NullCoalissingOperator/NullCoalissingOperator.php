<?php
$data = [
    "action" => "Create",
];

// wthout coalisisng operator
if (isset($data["action"])) {
    $action = $data["action"];
}else{
    $action = "nothing";
}

echo $action . PHP_EOL;


// Null Coalising OPerator

$action2 = $data["action"] ?? "Nothing";
echo $action2 . PHP_EOL;

