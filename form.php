<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <h1>
        <?php
            echo "Believe it or not, HTML IS BACK BABY!!!"
        ?>
    </h1>
    <?php
    if ($a > $b)
        echo "a is bigger than b";

    ?>
    <form action="action_page.php" method="post">
        First name: <input type="text" name="fname"><br>
        Last name: <input type="text" name="lname"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
