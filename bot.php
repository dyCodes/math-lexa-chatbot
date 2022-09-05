<?php

// Get user message
$message = strtolower($_POST['message']);

$phrases = array(
    "what is the formula for",
    "the formula for",
    "formula for",
    "formula",
    "what is the",
    "what is",
    "what's",
    "whats",
    "is",
    "the",
);

$keyword = $message;

// Retrieve keyword from user message
foreach ($phrases as $phrase) {
    if (strpos($keyword,  $phrase) !== false) {
        $keyword  = str_replace($phrase, "", $keyword);
    }
    $keyword = trim($keyword);
}

// Fetch formulas from database.txt
$fileDB = file('database.txt');
$database = [];

// Read file content line by line
$i = 0;
foreach ($fileDB as $line) {
    // Store keyword and response
    $lineArray = explode('|', $line);
    $key = trim($lineArray[0]);
    $value = trim($lineArray[1]);
    $database[$key] = $value;
    $i++;
}

// Search for keyword
if (array_key_exists($keyword, $database)) {
    $response = $database[$keyword];
} else {
    $response = null;
}

if ($response) {
    echo ucfirst($keyword) . ": <b>$response</b>";
    // echo "The formula for $keyword is: $response";
} else {
    echo "Oops, didn’t quite get that.";
}
