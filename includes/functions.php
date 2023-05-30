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

function isUserLoggedIn() {
    // shorthand
    return isUser() || isEditor() || isAdmin() ? true : false;
}
// check if the current user is an admin or not
function isAdmin(){

    if ( isset( $_SESSION['user']['role'] ) && $_SESSION['user']['role'] === 'admin' ) {
        return true;
    } else {
        return false;
    }
}

// check if current user is an editor or not 
function isEditor() {
    if ( isset( $_SESSION['user']['role'] ) && $_SESSION['user']['role'] === 'editor' ) {
        return true;
    } else {
        return false;
    }
}

// check if current user is an editor or not 
function isUser() {
    if ( isset( $_SESSION['user']['role'] ) && $_SESSION['user']['role'] === 'user' ) {
        return true;
    } else {
        return false;
    }
}

//Two role for accessing the page
function isAdminOrEditor() {
//     if ( 
//         isset( $_SESSION['user']['role'] ) && 
//         (
//             $_SESSION['user']['role'] === 'admin' || 
//             $_SESSION['user']['role'] === 'editor'
//         ) 
//     ) {
//         return true;
//     } else {
//         return false;
//     }
}

//shorthand 
function isEditorOrUser() {
    // shorthand
    //return isUser() || isEditor() ? true : false;


    // long method
    // if ( isUser() || isEditor() ) {
    //     return true;
    // } else {
    //     return false;
    // }
}