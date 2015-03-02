<?php
include 'db_config.php';
$found = 0;

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];


        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($conn,$username);
        $password = mysqli_real_escape_string($conn,$password);

       // $db_selected = mysql_select_db($db, $conn);

        $query = "SELECT COUNT(1) AS cnt, concat(u.firstname,' ', u.lastname) as fullname, u.job_title, u.department FROM users u where u.username = '$username' and u.password = '$password';";

        $dataset = mysqli_query($conn,$query);

        if(! $dataset ){
          die('Could not retrieve data: ' . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($dataset)) {
            $found = $row['cnt'];
            $_SESSION['fullname']=$row['fullname'];
            $_SESSION['department']=$row['department'];
            $_SESSION['job_title']=$row['job_title'];
        }

        if ($found == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: eval_form.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }

        mysqli_close($conn); // Closing Connection
    }
}
?>