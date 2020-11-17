<?php include_once 'header.php';?> 
<?php
 $conn = mysqli_connect('localhost','root','','frnder')
 or die('Error connecting to MySQL server.');
?>

<section class="row">
            <div class="grid">
            <table class="table">
                <tr>
                <th>Username</th>
                <th>E-mail</th>
                <th>About</th>
                </tr>
        <?php
            $userid=$_SESSION["userid"];

            $sql= "SELECT u.usersId, u.usersName, u.usersEmail, m.matchsQ15 from matchs m 
            join users u on u.usersId = m.usersid where
            matchsQ1 = (select matchsQ1 from matchs where usersId = $userid) and
            matchsQ2 = (select matchsQ2 from matchs where usersId = $userid) and
            matchsQ3 = (select matchsQ3 from matchs where usersId = $userid) and
            matchsQ4 = (select matchsQ4 from matchs where usersId = $userid) and
            matchsQ5 = (select matchsQ5 from matchs where usersId = $userid) and
            matchsQ6 = (select matchsQ6 from matchs where usersId = $userid) and
            matchsQ7 = (select matchsQ7 from matchs where usersId = $userid) and
            matchsQ8 = (select matchsQ8 from matchs where usersId = $userid) and
            matchsQ9 = (select matchsQ9 from matchs where usersId = $userid) and
            matchsQ11 = (select matchsQ11 from matchs where usersId = $userid) and
            matchsQ12 = (select matchsQ12 from matchs where usersId = $userid) and
            matchsQ13 = (select matchsQ13 from matchs where usersId = $userid) and
            matchsQ14 = (select matchsQ14 from matchs where usersId = $userid) and
            m.usersId != $userid and u.usersId != $userid;";
            $result=mysqli_query($conn,$sql);
            $resultCheck= mysqli_num_rows($result);
            
            if($resultCheck >0){
                while ($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row["usersName"]. "</td><td><a href="."mailto:".$row["usersEmail"].">". $row["usersEmail"]."</a></td><td>".$row["matchsQ15"]. "</td></tr>". "<br>";
                }
            }      
        
            else{
                echo "<h3> NO MATCH YET!</h3>";
            }
        ?>
        </table>
</div>
</section>
<?php include_once 'footer.php';?> 