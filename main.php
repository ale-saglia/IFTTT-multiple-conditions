<?php
    include("database.php");

    $variableName = $_GET["name"];
    $variableValue = $_GET["value"];

    mysqli_query($dbw, "UPDATE ".DB_TABLE." SET value = '" . $variableValue . "' WHERE name = '".$variableName."' ");

    header('Location:logic.php' );
?>