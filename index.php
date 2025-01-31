<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$response = [
    "email" => "ubanistephanieugonna@gmail.com",
    "current_datetime" => gmdate("c"), // ISO 8601 format
    "github_url" => "https://github.com/stephubani/hng12-public-ap"
];

echo json_encode($response);
