
<!DOCTYPE html>
<html>
<head>
    <title>File Upload System</title>
    <style>
        body{
            background:aqua;
        }
    </style>
</head>
<body>
<h2>Upload File</h2>
<form action="up_logic.php" method="POST" enctype="multipart/form-data">
    Select File:
    <input type="file" name="myfile" required>
    <br><br>
    <input type="submit" name="upload" value="Upload File">

</form>
</body>
</html>