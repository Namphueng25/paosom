<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connection_connect.php');
         
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $query = "SELECT * FROM user INNER JOIN paosom ON user.user_id = paosom.user_id WHERE username = '$username' AND password = '$password'"; 
        $result = mysqli_query($conn, $query);
    

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['paosom_id'] = $row['paosom_id'];
            $_SESSION['fname'] = $row['fname'] . " " . $row['lname'];
            $_SESSION['s_userlevel'] = $row['s_userlevel'];

            if ($_SESSION['s_userlevel'] == 's') {
                header("Location: indexpaosom.php");
            }
        } 
      
        else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: index.php");
    }


?>