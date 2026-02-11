
<?php
echo "<h2>file functions</h2>";

$filename="sample.txt";
// Write
file_put_contents($filename, "Hello! This is PHP File Functions Demo.in that we are going to see 
all functions related to files.\nWelcome!\n");

//Open
$file=fopen($filename,"r");

//Read 
echo "<h3>File Contents:</h3>";
echo "<pre>".fread($file, filesize($filename))."</pre>";

//Close 
fclose($file);

//using file_get_contents()
echo "<h3>Using file_get_contents():</h3>";
echo "<pre>".file_get_contents($filename)."</pre>";

//using file() — line by line
echo "<h3>line by line read using file():</h3>";
$lines=file($filename);
foreach ($lines as $line) {
    echo $line."<br>";
}

echo "<h3>File Info:</h3>";

echo "File Exists:".(file_exists($filename)? "Yes":"No")."<br>";
echo "File Size:".filesize($filename)."bytes<br>";
echo "File Type:".filetype($filename)."<br>";
echo "Last Access Time:".date("Y-m-d H:i:s",fileatime($filename))."<br>";
echo "Last Modified Time:".date("Y-m-d H:i:s",filemtime($filename))."<br>";
echo "Last Change Time:".date("Y-m-d H:i:s",filectime($filename))."<br>";

echo "Permissions:".substr(sprintf('%o',fileperms($filename)),-4) . "<br>";
echo "Owner ID:".fileowner($filename)."<br>";
echo "Group ID:".filegroup($filename)."<br>";
echo "Inode:".fileinode($filename)."<br>";

copy($filename,"copy_demo.txt");
rename("copy_demo.txt","renamed_demo.txt");

echo "<h3>File and Folder Operations:</h3>";
echo "File Copied & Renamed Successfully.<br>";

mkdir("test_folder");
echo "Folder Created: test_folder<br>";

if (is_file($filename)) {
    echo "$filename is a file<br>";
}

if (is_dir("test_folder")) {
    echo "test_folder is a directory<br>";
}


echo "<h3>Dir_Listing:</h3>";
$files=scandir(".");
foreach ($files as $f) {
    echo $f."<br>";
}

echo "<h3>Cur_Directory:</h3>";
echo getcwd()."<br>";


echo "<h3>File Lock:</h3>";

$lockFile=fopen($filename,"r+");

if (flock($lockFile,LOCK_EX)) {
    echo "File Locked Successfully<br>";
    flock($lockFile,LOCK_UN);
    echo "File Unlocked<br>";
}

fclose($lockFile);


unlink("renamed_demo.txt");
rmdir("test_folder");

echo "<h3>Cleanup Done:</h3>";
echo "Deleted renamed file & folder<br>";
?>