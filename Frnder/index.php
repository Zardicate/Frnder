<?php include_once 'header.php';?>    
        <!--intro-->
        <section class="container intro">
            <h2>The greatest gift of life is friendship, We will help you find yours.</h2>
            
            
            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<p>Hello welcome, Let's find your true friend!</p>";
                    echo "<a class='btn-base btn-gen' href='profile.php'>Start</a>";
                }
                else{
                echo "<p>Hello welcome, please sign up and find your true friend!</p>";
                echo "<a class='btn-base btn-gen' href='register.php'>Register Now!</a>";
                }
                ?>
        </section>
        <!--teaser-->
        <section class="row">
            <div class="grid">
                <section class="teaser col-1-3">
                    <h5>QUICKLY</h5>
                        <h3>Register</h3>
                        <p>Simple 5 steps to register to best the best possible match.</p>
                </section><!--

                --><section class="teaser col-1-3"> 
                <h5>EASY</h5>
                        <h3>Question & Answer</h3>
                    
                        <p>If we know you, we will find you your pefect frined through out your college journey.</p>
                </section><!--

                --><section class="teaser col-1-3">
                <h5>ACCURATE</h5>
                        <h3>Find Your Friend</h3>
                        
                        <p>Let's discover new friendship and worthy roommate.</p>
                </section>
            </div>
        </section>
<?php include_once 'footer.php';?> 
       