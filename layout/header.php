<?php
session_start();
if (isset($_SESSION["id"])) {
    $current_user = getUser($_SESSION["id"]);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cooking Chef</title>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/flexboxgrid.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>