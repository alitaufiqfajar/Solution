<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<?php
$con = mysqli_connect("localhost","root","","arkademy");
$query = "SELECT posts.title, users.username, comments.comment FROM posts, users, comments WHERE users.id = posts.createdBy";
$result = mysqli_query($con, $query);
?>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <?php
            while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?php echo $row['username'];?></b></a>
                            made a post.
                        </div>
                    </div>
                </div> 
                <div class="post-description"> 
                    <?php
                        echo '<p>'.$row['comment'].'</p>';
                    ?>
                </div>
            </div>
        </div>

        
    </div>
            <?php 
                }
            ?>
</div>