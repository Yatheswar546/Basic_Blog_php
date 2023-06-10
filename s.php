<?php 
    $id = $_GET['id'];
    $db =  mysqli_connect("localhost","root","","blogs");
    $sql = mysqli_query($db,"SELECT * FROM `blogs` WHERE id= '$id'");
    if(mysqli_num_rows($sql)>0){
        $row = mysqli_fetch_assoc($sql);
    ?>
    <img src="./images/<?php echo $row['img']?>" alt="" style="height:400px; width:500px">
    <h1><?php  echo $row['title'] ?></h1>
    <p><?php echo $row['content']?></p>
<?php
    }
    else{
        echo "blogs Not Found";
    }
?>

