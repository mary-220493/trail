<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background:aqua;
                text-align:center;
            }
            h3{
                background:white;
            }
        </style>
    </head>
    <body>
        <?php
echo "<h2>TASK-B</h2>";
echo "<h3>Basic String Functions</h3 <br>";
$text="Welcome To The PHP String Functions.";
echo "text:".$text."<br><br>";

//strlen
echo "length:" .strlen($text)."<br>";
echo "word_count:" .str_word_count($text)."<br>";
echo "reverse:" .strrev($text)."<br>";
echo "<h3>Case Conversion</h3>";
echo "string_upper:" .strtoupper($text)."<br>";
echo "string_lower:" .strtolower($text)."<br>";
echo "ucfirst:" .ucfirst(trim($text))."<br>";
echo "ucwords:" .ucwords(trim($text))."<br>";
echo "<h3>Search and replace</h3><br>";
echo "position of PHP:" .strpos($text,"PHP")."<br>";
echo "replace:" .str_replace("PHP","python",$text)."<br>";
echo "<h3>substring and trimming</h3>";
echo "substring:" .substr($text,1,10)."<br>";
echo  "trim:" .trim($text)."<br>";
echo  "ltrim:" .ltrim($text)."<br>";
echo  "rtrim:" .rtrim($text)."<br>";
echo "<h3>String comparisons</h3>";
$str1="MARY ANU";
$str2="mary anu";
echo "strcmp:" .strcmp($str1,$str2)."<br>";
echo "strcasecmp:" .strcasecmp($str1,$str2)."<br>";
echo "<h3>special chars and security</h3>";

?>
</body>
</html>