<?php
include 'db_config.php';
$found=0;

$login_username=(empty($_POST['username'])?"no value":$_POST['username']);
$login_password=(empty($_POST['password'])?"no value":$_POST['password']);

$conn = mysql_connect($host, $username, $password);
if (!$conn) {
  die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db($db, $conn);

$query = "SELECT count(1) as cnt FROM users where username = '$login_username' and password = '$login_password';";

$dataset = mysql_query($query,$conn);

if(! $dataset ){
  die('Could not retrieve data: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($dataset)) {
    $found = $row['cnt'];
}
    
mysql_close($conn);

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <body>
        <?php
            if($found == 0){
                echo("Either username or password were not correct!!!");
            } else {
                header("Location:eval_form.htm");
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <table>
            <tr>
                <td width="30%">Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            </table>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
