<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>

<body>
    <form action="" method="GET">
        <h2>What is your age?</h2>
        <input type="number" placeholder="eg. 22" name="age">
    </form>

    <?php

        $age = $_GET["age"];
        if ($age < 18) {
            echo "<h3 style='color: red'>Your are not eligible!</h3>";
            $remainingAge = 18 - $age;
            echo "<h4>Remaining age to become eligible: $remainingAge </h4>";
        } else {
            echo "<h3 style='color: green'>Your are eligible!</h3>";
        }

    ?>


</body>

</html>