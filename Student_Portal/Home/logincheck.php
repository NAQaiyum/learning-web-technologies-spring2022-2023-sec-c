<?php 
    session_start();
    
    if(isset($_REQUEST['login'])){
        
        // 1
        // $username = $_REQUEST['username'];
        // $password = $_REQUEST['password'];

        if($_POST['username'] == "" && $_POST['password'] == ""){
            echo "Null data found...";
?>

<br>
<a href="login.php">Try again</a>

<?php    
        }
        else{
            $file = file('../Home/regform.txt');
            $found = false;

            foreach($file as $line) {
                $parts = explode('||', $line);
                $username = trim($parts[0]);
                $password = trim($parts[1]);
            
                if($username == $_POST['username'] && $password == $_POST['password']) {
                    $found = true;
                    break;
                }
            }

            if($found) {
                // allow access to the desired content
                // echo "Access granted.";
                $_SESSION['username'] = $username;
                setcookie('flag', 'true',time()+3600,'/');
                header('location: myhome.php');


                if(!empty($_POST["remember"])) {
                    setcookie ("username",$_POST["username"],time()+ 3600);
                    setcookie ("password",$_POST["password"],time()+ 3600);
                    
                } else {
                    setcookie("username","");
                    setcookie("password","");
                    
                }
            } else {
                // deny access
                echo "Access denied.";
            }
?>

<br>
<a href="login.php">Try again</a>

<?php
        }
    
    }else{
        header('location: login.php');
    }

?>