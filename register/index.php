<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Register</title>
    <?php include "../templates/head.php" ?>
</head>
<body>
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
        <form action="" method="post" id="registerForm" class="form">
            <div class="half">
                <input type="text" id="firstName" class="mobile" name="firstName" placeholder="first name" autofocus="on" required /><br />
                <input type="text" id="lastName" class="mobile" name="lastName" placeholder="last name" required /><br />
                <input type="email" id="email" class="mobile" name="email" placeholder="email" required /><br />
                <select id="favoriteFoodSelection">
                    <option value="0">Favorite Type of Food:</option>
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
            </div>
            <div class="half">
                <input type="text" id="username" name="username" placeholder="username" required /><br />
                <input type="password" id="password" name="password" placeholder="password" required /><br />
                <input type="text" id="dob" name="dob" max="<?php print date("Y-m-d") ?>" placeholder="date of birth" onfocus="(this.type='date')" onblur="(this.type='text')" required /><br />
                <div id="dietaryRestrctionsCheckboxes">
                    <p>Dietary Restrictions:</p>
                    <label><input type="checkbox" name="dietaryRestrctions" value="lacto vegetarian"> Lacto Vegetarian</label><br />
                    <label><input type="checkbox" name="dietaryRestrctions" value="ovo vegetarian"> Ovo Vegetarian</label><br />
                    <label><input type="checkbox" name="dietaryRestrctions" value="pescetarian"> Pescetarian</label><br />
                    <label><input type="checkbox" name="dietaryRestrctions" value="vegan"> Vegan</label><br />
                    <label><input type="checkbox" name="dietaryRestrctions" value="vegetarian"> Vegetarian</label><br />
                </div>
            </div>
            <input type="submit" id="registerBtn" class="button mobile" name="registerBtn" value="register" />
        </form>
    </div>
</div>
</body>
</html>