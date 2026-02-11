<?php
if(isset($_POST['upload'])){
    $targetDir="uploads/";
    $fileName=basename($_FILES["myfile"]["name"]);
    $targetFile=$targetDir.$fileName;
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$targetFile)){
        echo "<h3>File upload successfully</h3>";
        echo "<a href='download.php?file=$fileName'>Download file</a>";
    }
    else{
        echo "error in uploading";
    }
}
?>
