<?php
    require "header1.php"
?>


<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php>
                if (isset($_SESSION['userId'])) {
                    echo '<p class="login-status">You are logged in!</p>';
                }
                else {
                    echo '<p class="login-status">You are loggede out!</p>';
                }

                ?>


            </section>
        </div>
    </main>
<?php
    require "footer.php"
?>