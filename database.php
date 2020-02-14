<?php
    define("DB_SERVER", "localhost");
    define("DB_USERNAME", "user");
    define("DB_PASSWORD", "password");
    define("DB_DATABASE", "database");
    define("DB_TABLE", "table");

    define("IFTTT_WEBHOOKS_KEY", "url");

    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);