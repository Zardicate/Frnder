<?php include_once 'header.php';?>  
        <section class="row">
            <div class="grid">
                <section class="col-2-3">
                    <h1>Register</h1>
                    <p>Please register to find your true friend for your college life. Start right and find a match with same interest people easily in your college. </p>
                    <h4>Why you should Register?</h4>
                    <ul class="merit-list">
                        <li>Quick and Accurate</li>
                        <li>Easy to follow!</li>
                        <li>Grow your network</li>
                    </ul>
                </section><!--

                --><form  class="col-1-3" action="includes/signup.inc.php" method="POST">
                    <fieldset class="register-form">
                        <label>
                            Name
                            <input type="text" name="name" placeholder="Eg. John" required>
                        </label>
                        <label>
                            Email
                            <input type="email" name="email" placeholder="abc@xyz.com" required>
                        </label>
                        <label>
                            Username
                            <input type="text" name="uid" placeholder="Eg. Victor99" required>
                        </label>
                        <label>
                            Password
                            <input type="password" name="pwd" placeholder="Enter Password..." required>
                        </label>
                        <label>
                            Repeat Password
                            <input type="password" name="pwdrepeat" placeholder="Re-enter Password..." required>
                        </label>
                    </fieldset>
                    <input class="btn-base btn-pur" type="submit" name="submit" value="submit">
                    <br>
                    <br>
                    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo "<p>Choose a proper Name!!!</p>";
            }
            else if($_GET["error"]=="invalidUid"){
                echo "<p>Choose a proper Username!!!</p>";
            }
            else if($_GET["error"]=="invalidemail"){
                echo "<p>Choose a proper Email!!!</p>";
            }
            else if($_GET["error"]=="passwordsdontMatch"){
                echo "<p>Password doesn't match!!!</p>";
            }
            else if($_GET["error"]=="usernametaken"){
                echo "<p>Choose another Username!!!</p>";
            }
            else if($_GET["error"]=="stmtfailed"){
                echo "<p>Something went wrong, try again!!!</p>";
            }

        }
        ?>
                </form>
            </div>
        </section>


<?php include_once 'footer.php';?> 

