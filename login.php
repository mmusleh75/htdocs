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

        $conn = mysql_connect($host, $dbusername, $dbpassword);
        if (!$conn) {
          die('Could not connect: ' . mysql_error());
        }

        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $db_selected = mysql_select_db($db, $conn);

        $query = "SELECT COUNT(1) AS cnt, concat(u.firstname,' ', u.lastname) as fullname, u.job_title, u.department FROM users u where u.username = '$username' and u.password = '$password';";

        $dataset = mysql_query($query,$conn);

        if(! $dataset ){
          die('Could not retrieve data: ' . mysql_error());
        }

        while ($row = mysql_fetch_assoc($dataset)) {
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

        mysql_close($conn); // Closing Connection
    }
}
?>