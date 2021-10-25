<?php 

 include ('header.php');

?>

<?php
    $dayoftheweek = date("w")
    switch($dayofweek) {
        case 1:
            echo "It is Monday";
            break;
        case 2:
            echo "<p>It is Tuesday</p>"
            break;
        case 3:
            echo "It is Wedenesday";
            break;
        case 4:
            echo "It is Thursday";
            break;
        case 5:
            echo "It's friday"
            break;
        case 6:
            echo "It's Saturday"
            break;
        case 7:
            echo "It's Sunday"
            break;
        



    }