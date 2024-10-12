<html>
    <H1>
        <a href="index.php">Index</a>
    </H1>
</html>

<?php
    for ($a = 1; $a <= 5; $a++) {
        for ($b = 1; $b <= $a; $b++) {
            echo "*";
        }
        echo "<br>";
    }
?>