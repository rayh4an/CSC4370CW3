<html>
    <head>
        <style>
            .triangle {
                text-align: right;
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <a href="index.php">Index</a>
        </h1>

        <div class="triangle">
            
            <?php
                function triangle($value) {
                    for ($a = 1; $a <= $value; $a++) {
                        echo str_repeat("&nbsp;", $value - $a) . str_repeat("*", $a);
                        echo "<br>";
                    } 
                }
                echo "Triangle size: 5<br><br>";
                triangle(5);
            ?>

        </div>
    </body>
</html>
