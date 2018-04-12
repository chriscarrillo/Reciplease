<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | profile</title>
    <?php include "../templates/head.php" ?>
</head>
<body id="homePage">
<?php include "../templates/functions.php" ?>
    <div id="profile">
        <div>
            <div id="home">
                <?php
                    session_start();
                    
                    if (!isLoggedIn()) {
                        header("Location: ..");
                    }
    
                    include "../templates/logo.php";
                ?>
            </div>
            <form action="" method="get" id="searchForm" class="form">
                    <input type="textSearch" id="search" name="search" placeholder="search" /><br />
            </form>
            <div id="title">
                <h1 id="title1">start your...</h1>
                <h1 id="title2">food journey here</h1>
            </div>
            <div id="tabs">
                <ul>
                    <li><h1><?= $_SESSION["firstName"] ?></h1></li>
                    <li><a href="../index.php">home</a></li>
                    <li><a href="../pantry/">pantry</a></li>
                    <li><a href="../popular/">popular</a></li>
                </ul>
            </div>
        </div>
        <img class="profilepic" src="../images/default.png" title="Profile Picture" alt="Profile Picture" />;
        <div id="centerBox" class="centered">
            <h1><?= $_SESSION["firstName"] ?>'s profile</h1>
            <form action="" method="post" id="profileForm" class="form">
                <input type="text" id="firstName" name="firstName" placeholder="first name" /><br /> <!-- The placeholder should be the name in the db -->
                <input type="text" id="lastName" name="lastName" placeholder="last name" /><br /> <!-- The placeholder should be the name in the db -->
                <input type="text" id="username" name="username" placeholder="username" /><br />
                <input type="password" id="password" name="password" placeholder="password" /><br />
                <input type="email" id="email" name="email" placeholder="email" /><br />
                <div class="right">
                    <input type="file" id="profilePicture" name="profilePicture" /><br />
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
            </form>
        </div>
    </div>
</body>
</html>