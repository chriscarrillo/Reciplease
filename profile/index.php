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
                    <li><h1><?= print $_SESSION["firstName"] ?></h1></li>
                    <li><a href="../index.php">home</a></li>
                    <li><a href="../pantry/">pantry</a></li>
                    <li><a href="../popular/">popular</a></li>
                    <?php
                        if (isLoggedIn()) {
                    ?>
                    <li><a href="../logout.php">logout</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <img class="profilepic" src="../images/default.png" title="Profile Picture" alt="Profile Picture" />;
        <div id="centerBox" class="centered">
            <h1><?= print $_SESSION["firstName"] ?>'s profile</h1>
            <form action="" method="post" id="profileForm" class="form">
                <input type="text" id="firstName" name="firstName" value="<?= print $_SESSION["firstName"] ?>" placeholder="first name" required /><br />
                <input type="text" id="lastName" name="lastName" value="<?= print $_SESSION["lastName"] ?>" placeholder="last name" required /><br />
                <input type="text" id="username" name="username" value="<?= print $_SESSION["username"] ?>" placeholder="username" required /><br />
                <input type="password" id="password" name="password" placeholder="password" required /><br />
                <input type="email" id="email" name="email" value="<?= print $_SESSION["email"] ?>" placeholder="email" required /><br />
                <div class="right">
                    <input type="file" id="profilePicture" name="profilePicture" /><br />
                    <p>date of birth</p>
                    <select name="dobMonth" required>
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
                    <select name="dobDay" required>
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
                    <select name="dobYear" required>
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
                        <p>dietary restrictions:</p>
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="lacto vegetarian"> Lacto Vegetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="ovo vegetarian"> Ovo Vegetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="pescetarian"> Pescetarian</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="vegan"> Vegan</label><br />
                        <label><input type="checkbox" name="dietaryRestrictions[]" value="vegetarian"> Vegetarian</label><br />
                    </div>
                </div>
                </div>
                <input type="submit" name="updateProfile" value="Update Profile" />
            </form>
            <?php
                if (isset($_POST["updateProfile"])) {
                    $dob = $_POST["dobYear"] . "-" . $_POST["dobMonth"] . "-" . $_POST["dobDay"];

                    updateProfile($_SESSION["id"], $_POST["firstName"], $_POST["lastName"], $_POST["username"], $_POST["password"], $_POST["email"], $dob);
                }
            ?>
        </div>
    </div>
</body>
</html>