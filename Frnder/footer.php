<footer class="container primary-footer clearfix">
            <small>&copy;Madhav Ginoria</small> 
            <nav class="nav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <?php
                if(isset($_SESSION["useruid"])){
                    echo "<a href='profile.php'>Profile</a>";
                    echo "<a href='includes/logout.inc.php'> Logout</a>";
                }
                else{
                echo "<a href='login.php'>Login</a>";
                echo "<a href='register.php'> Register</a>";
                }
                ?>
            </nav>
        </footer>

    </body>
</html>