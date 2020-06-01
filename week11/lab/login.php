<?php
    validLogin($username,$password){
        require_once 'db_login.php';
        $sql = 'select * where username = ? and password = ?';
        $result = &$db->query($sql,array($username,$password));
        $row_result = $result->fetchRow();
        if(is_null($row_result)){
            return 1;
        } else return 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_POST['logout'])){
            session_start();
            session_destroy();
        } else {
            session_start();
            if(isset($_POST['username'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if(validLogin($username,$password)){
                    $_SESSION['username'] = $username;
                    echo "Welcome!!";
                }
                echo "<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
                    <input type='hidden' name='logout' value=1> 
                    <input type='submit' name='logout'>
                    </form>";
            } else {
                echo "<font color='red'>Invalid username or password</font>";
            }
        }

        if(!isset($_SESSION['username'])){
            echo "<form action="<? echo $_SERVER['PHP_SELF']?>" method='post'>
                <input type='text' name='username'><br>
                <input type='password' name='password'><br>
                <input type='submit' name='login'><br>
                </form>";
        }
    ?>
    
</body>
</html>