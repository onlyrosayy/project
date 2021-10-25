<?php 
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $mailuid = $_POST['maliuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid)) ||empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit()
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_oreoare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {

            mysqli_stmt_blind_param($stmt, "ss", $mailuid, $password);
            mysqli_stmt_excuse($stmt):
            $result = mysqil_stmt_get_result($stmt);
            if ($row = mysqil_fetch_assoc()) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                }
                else if {
                    header("Location ../index.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}
else { 
    header("Location ../index.php");
    exit();
}