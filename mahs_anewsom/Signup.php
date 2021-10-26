<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
               <h1>signup</h1>
               <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Fill in all Field!</p>';
                    }
                    else if ($_GET['error'] == "invaliduidmail") {
                        echo'<p class="signuperror">Invalid username and e-mail!</p>';
                    }
                    else if ($_GET['error'] == "invaliduid") {
                        echo'<p class="signuperror">Invalid username!</p>';
                    }
                    else if ($_GET['error'] == "invaliduidmail") {
                        echo'<p class="signuperror">Invalid e-mail!</p>';  
                    }
                    else if ($_GET['error'] == "passwordcheck") {
                        echo'<p class="signuperror">Your passwords do not match!</p>';
                    }
                    else if ($_GET['error'] == "usertaken") {
                        echo'<p class="signuperror">Your username is already taken!</p>';
                    }
                }
                else if ($_GET['error'] == "success") {
                        echo'<p class="signupsuccess">Signup successful!</p>';
                    }
                    
               ?>
               <form action="includes/signup.inc.php" method="post">
                 <input type="text" name="uid" placeholder="username">
                 <input type="text" name="mail" placeholder="E-mail">
                 <input type="password" name="pwd" placeholder="password">
                 <input type="password" name="pwd-repeat" placeholder="repeat password">
                 <button type="submit" name="signup-submit">Signup</button>
             </section>
           </div>
         </main>

<?php>
    require "footer.php";
?>