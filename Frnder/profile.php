<?php include_once 'header.php';?>   

<section class="row">
            <div class="grid">
            <h3 class="profile"><?php
            if (isset($_SESSION['useruid'])){
                echo "<p>Hello " . $_SESSION['useruid'] . "</p>";}?>HELP US FIND YOU YOUR PERFECT MATCH!</h3>
            <form  class="" action="includes/profile.inc.php" method="POST">
                    <fieldset class="register-form">
                        <label>
                            Where do you belong?
                                <select name="q1" required>
                                <option value="" disabled="disabled">Pick a choice!</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select> 
                            </label>    
                        <label>
                            Which language you prefer talking in ?
                            <select name="q2"  required>
                            <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="Hindi"> Hindi </option>
                                <option value="English"> English </option>
                                <option value="Bengali"> Bengali </option>
                                <option value="Marathi"> Marathi </option>
                                <option value="Telugu"> Telugu </option>
                                <option value="Tamil"> Tamil </option>
                                <option value="Gujarati"> Gujarati </option>
                                <option value="Urdu"> Urdu </option>
                                <option value="Kannada"> Kannada</option>
                                <option value="Odia"> Odia </option>
                                <option value="Malayalam"> Malayalam </option>
                                <option value="Punjabi"> Punjabi </option>
                                <option value="Assamese"> Assamese </option>
                                <option value="Sanskrit"> Sanskrit </option>
                                <option value="Bihari"> Bihari </option>
                                </select> 
                            </label>    
                        <label>
                           What's your Gender?
                           <select name="q3" required>
                           <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="Male"> Male </option>
                                <option value="Female"> Female </option>
                                <option value="Other"> Other </option>
                            </select>
                        </label>
                        <label>
                            Which school are you in?
                            <select name="q4" required>
                            <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="seas"> School of Applied Sciences and Engineering </option>
                                <option value="som"> School of Management </option>
                                <option value="sol"> School of Law </option>
                                <option value="soj"> School of journalism </option>
                            </select>
                        </label>
                        <label>
                            Which course are you pursuing ?
                            <select name="q5" required>
                            <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="cse"> Computer Sciences </option>
                                <option value="elec"> Electrical </option>
                                <option value="mech"> Mechanical </option>
                                <option value="bllb"> BLLB </option>
                                <option value="bjmc"> BJMC </option>
                                <option value="bba"> BBA </option>
                                <option value="bba"> MBA </option>
                            </select>
                        </label>
                        <label>
                            Do you play sports?
                            <select name="q6" required>
                            <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="Football"> Football </option>
                                <option value="Basketball"> Basketball </option>
                                <option value="Swimming"> Swimming </option>
                                <option value="Tennis"> Tennis </option>
                                <option value="Table tennis"> Table tennis </option>
                                <option value="Weight Lifting"> Weight Lifting </option>
                                <option value="Cricket"> Cricket </option>
                                <option value="Volleyball"> Volleyball </option>
                                <option value="Squash"> Squash </option>
                            </select>
                        </label>
                        <label>
                            What are your hobbies?
                            <select name="q7" required>
                            <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="Dance"> Dance </option>
                                <option value="Music"> Music </option>
                                <option value="Art"> Art </option>
                                <option value="Reading Books"> Reading Books </option>
                                <option value="Acting"> Acting </option>
                            </select>
                        </label>
                        <label>
                            How often do you clean your room?
                            <select name="q8" required>
                            <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="1/w"> Once a week </option>
                                <option value="2/w"> Twice a week </option>
                                <option value="1/m"> Once a month </option>
                                <option value="whenever"> Whenever I feel like. </option>
                            </select>
                        </label>
                        <label>
                        Do your friend come over ?
                        <select name="q9" required> 
                        <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="yes"> Yes </option>
                                <option value="no"> No </option>
                            </select>
                        </label>
                        <label>
                        Do you have pets?
                        <select name="q10" required>
                        <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="yes"> Yes </option>
                                <option value="no"> No </option>
                            </select>
                        </label>
                        <label>
                        What is your food preference ?
                        <select name="q11" required>
                        <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="veg"> Vegetarian </option>
                                <option value="non-veg"> Non- Vegeterian </option>
                            </select>
                        </label>
                        <label>
                        Do you drink ?
                        <select name="q12" required>
                        <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="yes"> Yes </option>
                                <option value="no"> No </option>
                            </select>
                        </label>
                        <label>
                        Do you smoke?
                        <select name="q13" required>
                        <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="yes"> Yes </option>
                                <option value="no"> No </option>
                            </select>
                        </label>
                        <label>
                        Are you a night/day person?
                        <select name="q14" required>
                        <option value="" disabled="disabled">Pick a choice!</option>
                                <option value="night"> Night </option>
                                <option value="day"> Day </option>
                            </select>
                        </label>
                        <label>
                        Tell us about yourself!
                        <textarea name="q15" required></textarea>
                        </label>

                    </fieldset>
                    <input class="btn-base btn-pur" type="submit" name="submit" value="submit">
                </form>
                <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="stmtfailed"){
                echo "<p>Something went wrong, try again!!!</p>";
            }
            if($_GET["error"]=="alreadyexist"){
                echo "<p>Data already Exist, Wait for outcome!!!</p>";
            }
            if($_GET["error"]=="notexists"){
                echo "<p>Data Doesn't Exist, Quickly fill up!!</p>";
            }
        }
        ?>
            </div>
        </section>
            </div>
</section>
<?php include_once 'footer.php';?> 