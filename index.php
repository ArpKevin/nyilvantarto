<?php
include("head.php");
?>

<!doctype html>
<html lang="en">
<?php include("head.php"); ?>

<body>
    <h1>Hello, world!</h1>


    <?php
    if ($_SERVER['QUERY_STRING'] == "login") include("login.php"); else if ($_SERVER['QUERY_STRING'] == "registration") include("registration.php");
    ?>

    <?php include("footer.php"); ?>
</body>

</html>