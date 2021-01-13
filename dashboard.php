
<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashborad</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div class="demo-content  element_anim_1">
    <div>
        Welcome <?php echo $_SESSION["name"]; ?> ! Click to <a href="index.html">Logout</a>.
    </div>

    <div></div>
</div>
<script src="js/animate_scroll.min.js"></script> 
</body>
</html>