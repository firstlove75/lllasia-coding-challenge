<?php
$fileAuthorArr = ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"];
$authorFileArr = groupByOwners($fileAuthorArr);
print_r($authorFileArr);

function groupByOwners($fileAuthorArr) {
    $authorFileArr = [];
    foreach ($fileAuthorArr as $fileName => $author) {
        $authorFileArr[$author][] = $fileName;
    }
    return $authorFileArr;
}
