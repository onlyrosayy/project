<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="example">
    <meta name="viewpoint" content="with-device-width, initial-scale=1">
    <title>Header-Anaria Newsom</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">home</a><li>
            <li><a href="about.php">about</a><li>
            <li><a href="calendar.php">calendar</a><li>
            <li><a href="contact.php">contact</a><li>
        </ul>

    </nav>
</reader>

<php?

$_SESSION['username'] = "Anaria.Newsom";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        echo " You are not logged in";
    } else {
        echo "You are logged in!";
    }

?>

    <header>
        <nav>
          <a href="#">
            <img scr="img/logo.png" alt="logo">
          </a>
          <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About me</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/E-mail...">
          <input type="password" name="pwd" placeholder="Password...">
          <button type="submit" name="login-submit">login</button>
        </form>
        <a href="signup.php">Signup</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">logout</button>
        </form>
    </div>
</nav>

</header>

</body>

</html>