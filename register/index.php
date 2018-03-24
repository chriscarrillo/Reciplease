<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | register</title>
    <?php include "../templates/head.php" ?>
</head>
<body>
<?php include "../templates/functions.php" ?>
<div id="register">
    <div id="redBox">
        <div id="circle"></div>
    </div>
    <div id="centerBox" class="centered">
        <div id="logo">
            <?php
            include "../templates/logo.php";
            ?>
        </div>
        <h1>register</h1>
        <form action="index.php" method="post" id="registerForm" class="form" enctype="multipart/form-data">
            <div class="half">
                <input type="text" id="firstName" name="firstName" placeholder="first name" autofocus="on" required /><br />
                <input type="text" id="lastName" name="lastName" placeholder="last name" required /><br />
                <input type="email" id="email" name="email" placeholder="email" required /><br />
                <select id="favoriteFoodSelection" name="favoriteFood">
                    <option value="">Favorite Type of Food:</option>
                    <option value="african">African</option>
                    <option value="american">American</option>
                    <option value="british">British</option>
                    <option value="cajun">Cajun</option>
                    <option value="caribbean">Caribbean</option>
                    <option value="chinese">Chinese</option>
                    <option value="eastern european">Eastern European</option>
                    <option value="french">French</option>
                    <option value="german">German</option>
                    <option value="greek">Greek</option>
                    <option value="indian">Indian</option>
                    <option value="irish">Irish</option>
                    <option value="italian">Italian</option>
                    <option value="japanese">Japanese</option>
                    <option value="jewish">Jewish</option>
                    <option value="korean">Korean</option>
                    <option value="latin american">Latin American</option>
                    <option value="mexican">Mexican</option>
                    <option value="middle eastern">Middle Eastern</option>
                    <option value="nordic">Nordic</option>
                    <option value="southern">Southern</option>
                    <option value="spanish">Spanish</option>
                    <option value="thai">Thai</option>
                    <option value="vietnamese">Vietnamese</option>
                </select>
                <div class="right">
                    <p>upload profile picture</p>
                    <input type="file" name="profilePicture" id="profilePicture" accept="image/*" />
                </div>
            </div>
            <div class="half">
                <input type="text" id="username" name="username" placeholder="username" required /><br />
                <input type="password" id="password" name="password" placeholder="password" required /><br />
                <div class="right">
                    <p>date of birth</p>
                    <select name="dobMonth">
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="dobDay">
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                        ?>
                        <option value="
                            <?php
                                    ($i < 10) ? print 0 . $i : print $i;
                            ?>
                            "><?php ($i < 10) ? print 0 . $i : print $i; ?>
                        </option>
                        <?php
                            }
                        ?>
                    </select>
                    <select name="dobYear">
                        <?php
                            for ($i = date('Y'); $i >= (int) date('Y') - 100; $i--) {
                        ?>

                        <option value="
                            <?php
                                    print $i;
                            ?>
                            "><?php print $i; ?>
                        </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="clear">
                    <div id="dietaryRestrctionsCheckboxes">
                        <p>Dietary Restrictions:</p>
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="lacto vegetarian"> Lacto Vegetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="ovo vegetarian"> Ovo Vegetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="pescetarian"> Pescetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="vegan"> Vegan</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="vegetarian"> Vegetarian</label><br />
                    </div>
                </div>
            </div>
            <div id="links">
                <a href="../login" title="login">login</a>
            </div>
            <input type="submit" id="registerBtn" class="button" name="registerBtn" value="register" />
        </form>
        
        <?php
            if (isset($_POST["registerBtn"])) {
                print "hello";
                $dob = $_POST["dobYear"] . "-" . $_POST["dobMonth"] . "-" . $_POST["dobDay"];
                
                # Check if the user uploaded its own profile picture
                if (isset($_POST["profilePhoto"])) {
                    # If they did, then we will use the picture they uploaded
                    $profilePhoto = addslashes(file_get_contents($_FILES['profilePicture']['temp_name']));
                } else {
                    # Otherwise, let's use the default picture
                    $profilePhoto = addslashes(file_get_contents("../images/default.png"));
                }
                
                # Temporary left blank until the db is fixed to store dietary restrictions
                $dietaryRestrictions = "";
                
                register($_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["favoriteFood"], $_POST["username"], $_POST["password"], $profilePhoto, $dob, $dietaryRestrictions);
            }
        ?>
    </div>
</div>
</body>
</html>