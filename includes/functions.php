<?php

/* function to connect the db */
function connectToDB() {
    $host = 'devkinsta_db';
    $dbname = 'Simple_CMS';
    $dbuser = 'root';
    $dbpassword = 'WlekfIFX5rxSbNj2';

    $database = new PDO (
        "mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword
    );

    return $database;
}