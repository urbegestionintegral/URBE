<?php

$con = null;
if (function_exists('mysqli_connect')) {
    try {
        $con = mysqli_connect("localhost","root","","developers");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            $con = null;
        }
    } catch (Exception $e) {
        echo "Database connection error: " . $e->getMessage();
        $con = null;
    }
} else {
    echo "MySQLi extension is not enabled. Database features will be disabled.<br>";
}
?>
