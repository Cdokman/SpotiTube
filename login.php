<?php
/**
 * Created by PhpStorm.
 * User: Cyrano
 * Date: 1-6-2018
 * Time: 12:36
 */
if (isset($_POST['submit'])){

    include 'dbh.inc.php';

    $uid = mysql_real_escape_string($conn, $_POST['uid']);
    $pwd = mysql_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check if inpunts are empty
    if (empty($uid) || empty($pwd));
        # code...

    } else {
    $sql = "SELECT * FROM users WHERE user_uid='$uid'";



}

