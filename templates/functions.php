<?php
    $dbServerHost = "127.0.0.1";
    $dbUsername = "application";
    $dbPassword = "GB<YN~2zd+Cq!vAn";
    $dbName = "Reciplease";
    $dbPort = "3306";
    $db = new mysqli($dbServerHost, $dbUsername, $dbPassword, $dbName, $dbPort);

    function isLoggedIn() {
        if (isset($_SESSION["username"])) {
            return true;
        } else {
            return false;
        }
    }

    function register(&$fName, &$lName, &$email, &$favFood, &$username, &$password, $profilePhoto, &$dob, $dietaryRestrictions) {
        $fName = ucfirst(strtolower($fName));
        $lName = ucfirst(strtolower($lName));
        $email = strtolower($email);
        $username = strtolower($username);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $dietaryRestrictionsDB = implode(", ", $dietaryRestrictions);
        
        $sql = "INSERT INTO User VALUES(
                null,
                '$fName',
                '$lName',
                '$username',
                '$password',
                '$email',
                LOAD_FILE('$profilePhoto'),
                STR_TO_DATE('$dob', '%Y-%m-%d'),
                '$favFood',
                '$dietaryRestrictionsDB',
                null
            )";
        $result = mysqli_query($db, $sql);

            if (!$result) {
?>
            <p>There was an error during the registration.</p>
<?php
            } else {
                header("Location:../login");
            }
    }
?>