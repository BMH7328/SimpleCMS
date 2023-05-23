<?php

    // enable session in /
    session_start();

    // require all the functions files
    require "includes/functions.php";

    // your website path
    // parse_url will remove all the query string starting from the ?
    $path = parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH );
    // remove / using trim()
    $path = trim( $path, '/' );

    switch ($path) {
        case 'auth/login':
            require 'includes/auth/do_login.php';
            break;
        case 'auth/signup':
            require 'includes/auth/do_signup.php';
            break;
        case 'manage-posts-add':
            require 'pages/posts/manage-posts-add.php';
            break;
        case 'manage-posts-edit':
            require 'pages/posts/manage-posts-edit.php';
            break;
        case 'manage-posts':
            require 'pages/posts/manage-posts.php';
            break;
        case 'manage-users-add':
            require 'pages/users/manage-users-add.php';
            break;
        case 'manage-users-changepwd':
            require 'pages/users/manage-users-changepwd.php';
            break;
        case 'manage-users-edit':
            require 'pages/users/manage-users-edit.php';
            break;
        case 'manage-users':
            require 'pages/users/manage-users.php';
            break;
        case 'post':
            require 'pages/post.php';
            break;
        case 'dashboard':
            require 'pages/dashboard.php';
            break;
        case 'login': // condition
            require "pages/login.php";
            break;
        case 'signup': // condition
            require "pages/signup.php";
            break;
        case 'logout': // condition
            require "pages/logout.php";
            break;
        default:
            require "pages/home.php";
            break;
    }