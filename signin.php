<?php



if (isset($_POST['username'])) {

    include('connection_connect.php');
    echo "hi";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $paosom_no = rand(1000000000, 9999999999);

    $query = "INSERT INTO user (user_id, fname, lname, username,password,s_userlevel) VALUES (NULL, '$fname', '$lname', '$username', '$password','s')";
    $result = mysqli_query($conn, $query);

    $query1 = "SELECT * FROM user  WHERE username='$username' and password='$password'and fname='$fname'and lname='$lname' ";
    $result1 = mysqli_query($conn, $query1);
    $my_row = $result1->fetch_assoc();
    $user_id = $my_row['user_id'];


    $query2 = "INSERT INTO paosom (paosom_id, paosom_no, user_id, amount) VALUES (NULL, '$paosom_no', '$user_id', '0')";
    $result2 = mysqli_query($conn, $query2);

    header("Location: index.php");
} else {
    header("Location: index.php");
}
