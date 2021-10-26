<?php
if (isset($_POST['signup-submit'])) {

require 'dbh.inc.php';
 
$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd']
$passwordRepeat = $_POST['pwd-repeat'];

if (empty($username) || empty($username || empty($username || empty($username)) {
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", username))
    header("Location: ../signup.php?error=invalidmail&uid=");
    exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$email);
    exit();
}
else if ($password !== $passwordRepeat) {
    header(Location: ../signup.php?error=passwordcheckuid=".$username,"&mail=" .$email);
    exit();
}
else {
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_smtmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
}
else {
    mysqli_stmt_blind_param($stmt, "s", $username);
    mysqli_stmt_excute($stmt);
    mysqil_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
        header("Location: ../signup.php?error=usertacken&mail=".$email);
        exit();
    }
}
else {

    $sql = "INSERT INTO users (uidUsers, mailUsers, pwdUsers) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_smt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
else {
    $hashedPwd = password_harsh($password, PASSWORD_DEFAULT);

    mysqli_stmt_blind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    header("Location: ../signup.php?signup=success");
    exit();
    }
}
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else {
    header("Location: ../signup.php");
    exit();
}