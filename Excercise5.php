<html>
    <H1>
        <a href="index.php">Index</a>
    </H1>
</html>

<?php
function countWords($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z\s]/', '', $string);
    $mult = preg_split('/\s+/', $string);
    $often = [];
    foreach ($mult as $single) {
        if ($single) {
            if (array_key_exists($single, $often)) {
                $often[$single]++;
            } else {
                $often[$single] = 1;
            }
        }
    }
    
    print_r($often);
}

echo "phrase: This is a test. This test is simple.<br>";
echo "Word counts are in the array below: <br>";
countWords("This is a test. This test is simple.");
?>
