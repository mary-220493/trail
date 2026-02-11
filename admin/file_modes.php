
<?php
echo "<h2>Task 3</h2>";

$filen="mode_demo.txt";
echo "<h3>write only</h3>";
$file = fopen($filen, "w");
fwrite($file, "This is written using write only.\n");
fclose($file);
echo "File written.<br><br>";

echo "<h3>read only</h3>";
$file = fopen($filen, "r");
echo nl2br(fread($file, filesize($filen)));
fclose($file);
echo "<br><br>";

echo "<h3>append</h3>";
$file = fopen($filen, "a");
fwrite($file, "Appended using append.\n");
fclose($file);
echo "Data appended.<br><br>";

echo "<h3>using r+</h3>";
$file = fopen($filen, "r+");
fwrite($file, "Edited using r+ mode.\n");
fclose($file);
echo "File updated using r+.<br><br>";

echo "<h3>using w+</h3>";
$file = fopen($filen, "w+");
fwrite($file, "Overwritten using w+ mode.\n");
rewind($file);
echo nl2br(fread($file, filesize($filen)));
fclose($file);
echo "<br><br>";

echo "<h3>using a+</h3>";
$file = fopen($filen, "a+");
fwrite($file, "Added using a+ mode.\n");
rewind($file);
echo nl2br(fread($file, filesize($filen)));
fclose($file);
echo "<br><br>";
?>