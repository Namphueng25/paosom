<?php

$userid = $_SESSION['userid'];


session_start();

if (!$_SESSION['userid']) {
    header("Location: index.php");
} else {

?>
  <link rel="stylesheet" href="../../css/style2.css">
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/studentRequest/styletestudent.css">
    </head>

    <body bgcolor="#f0fff0">
    <?php echo "papa";?>  



    

    </html>
<?php } ?>