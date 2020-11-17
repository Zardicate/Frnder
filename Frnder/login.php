<?php include_once 'header.php';?>    
        <section class="row">
            <div class="grid">
                   <form  class="loginform" action="includes/login.inc.php" method="POST">
                    <fieldset class="register-form">
                        
                        <label>
                            Username
                            <input type="text" name="uid" placeholder="Username/ Email..." required>
                        </label>
                        <label>
                            Password
                            <input type="password" name="pwd" placeholder="Enter Password..." required>
                        </label>

                    </fieldset>
                    <input class="btn-base btn-pur btn-login" type="submit" name="submit" value="Login">

                    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo "<p>Choose a proper Input!!!</p>";
            }
            else if($_GET["error"]=="wronglogin"){
                echo "<p>Incorrect Information, try again!!!</p>";
            }

        }
        ?>
                </form>
            </div>
        </section>
<?php include_once 'footer.php';?> 