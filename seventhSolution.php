<?php
$con = mysqli_connect("localhost","root","","arkademy");
$query = "SELECT posts.title, users.username, comments.comment FROM posts, users, comments WHERE users.id = posts.createdBy";
$result = mysqli_query($con, $query);
?>
<?php
            while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo '<br>';
                echo $row['username'];
                echo $row['1'];
                // echo $row['username'];
                // echo $row['comment'];
                
            }
        ?>