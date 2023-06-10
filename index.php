<?php
    $db = mysqli_connect("localhost","root","","blogs");
    $title = $_POST['title']; 
    $content = $_POST['content'];
    $target = "./images/";
    $filename = $_FILES['img']['name'];
    $filetype = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
    $target_file = $target.basename(md5("userid".$_FILES['img']['name']).".".$filetype);
    $file = md5("userid".$_FILES['img']['name']).".".$filetype;
    if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){
        if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file)){
            $sql = mysqli_query($db,"INSERT INTO `blogs`(`title`, `content`, `img`) VALUES ('$title','$content','$file')");
            if($sql){
                echo "You have successfully uploaded the blogs";
            }
            else{
                echo "Something went wrong!!!";
            }
        }
        else{
            echo "Image not moved!!";
        }
    }
    else{
        echo "Image not accepted";
    }
?>