<?php
$age = date("Y") - $argv[2];
echo "Your name is " . $argv[1] . ", and your age is " . $age . "\n";
if ($age >= 18) {
        echo "You are a voter \n";
    } else {
        echo "You are not a voter \n";
}
if ($age >= 60) {
        echo "You are a senior citizen \n";
    } else {
        echo "You are not a senior citizen \n";
}
?>
