<?php

session_start();
if ($_SESSION['username']) {
    session_destroy();
    echo "<script>alert('You are successfully logged out');</script>";
    echo "<script>window.open('../index.html', '_self');</script>";
} else {
    echo "<script>alert('You are not logged in');</script>";
    echo "<script>window.open('../index.html', '_self');</script>";
}
