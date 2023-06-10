<?php
    $db = mysqli_connect("localhost","root","","blogs");
    $sql = mysqli_query($db,"SELECT * FROM `blogs`");
    if(mysqli_num_rows($sql)>0){
        while($row = mysqli_fetch_assoc($sql)){
?>
    <img src="./images/<?php echo $row['img']?>" alt="" style="height:400px; width:500px">
    <h1><?php  echo $row['title'] ?></h1>
    <p><?php echo $row['content']?></p>
    <a href="./s.php?id=<?php echo$row['id']?>">Read More</a>
<?php
        }
     
    }
        else{
            echo "No blogs Found";
        }
?>