<html>
    <H1>
        <a href="index.php">Index</a>
    </H1>
</html>

<?php
    function word_count($string) {
        $wordNum = 0;
        $determine = false;
        for ($a = 0; $a < strlen($string); $a++) {
            if ($string[$a] != ',' && $string[$a] != ' ' && $string[$a] != '?') {
                if (!$determine) {
                    $wordNum++;
                    $determine = true;
                }
            } else {
                $determine = false;
            }
        }
        return $wordNum;
    }
    echo "phrase: hello, how are you?<br>";
    echo "word count: " . word_count("hello, how are you?");
?>