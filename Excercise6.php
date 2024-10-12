<html>
    <H1>
        <a href="index.php">Index</a>
    </H1>
</html>

<?php
    function remove_all($string, $character) {
        $end = '';
        for ($a = 0; $a < strlen($string); $a++) {
            if ($string[$a] != $character) {
                $end .= $string[$a];
            }
        }
        return $end;
    }
    echo "phrase: Summer is here!<br>The phrase above will have all instances of the character (e) removed.<br>updated phrase: ";
    echo remove_all("Summer is here!", 'e');
?>