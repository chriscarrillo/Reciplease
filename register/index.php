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
            </div>
            <div class="half">
                <input type="text" id="username" name="username" placeholder="username" required /><br />
                <input type="password" id="password" name="password" placeholder="password" required /><br />
                <div class="right">
                    <p>date of birth</p>
                    <select id="dobMonth">
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
                    <select id="dobDay">
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
                    <select id="dobYear">
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
                        <label><input type="checkbox" name="dietaryRestrctions" value="lacto vegetarian"> Lacto Vegetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrctions" value="ovo vegetarian"> Ovo Vegetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrctions" value="pescetarian"> Pescetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrctions" value="vegan"> Vegan</label><br />
                        <label><input type="checkbox" name="dietaryRestrctions" value="vegetarian"> Vegetarian</label><br />
                    </div>
                </div>
            </div>
            <div id="links">
                <a href="../login" title="login">login</a>
            </div>
            <input type="submit" id="registerBtn" class="button mobile" name="registerBtn" value="register" />
        </form>
    </div>
</div>
</body>
</html>