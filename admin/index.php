<?php 

    session_start();
    $noNavbar = '';

    $pageTitle = 'Login';
    if(isset($_SESSION['Username'])){
        header('Location:dashboard.php');
    }
    include "init.php";
    


    //Check If the request is coming from http Request POST 

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['user']; //Get the Username
        $password = $_POST['pass']; // Get the password
        $hashedPass = sha1($password); // Encrypt the password
        
        //Check If the User exists in the data base
        // prepare the Query
        $stmt = $con->prepare('SELECT 
                                    UserID, Username, Password 
                                FROM 
                                    users 
                                WHERE 
                                    Username = ? 
                                AND 
                                    Password = ? 
                                AND 
                                    GroupID = 1
                                LIMIT
                                    1'); 
        $stmt->execute(array($username,$hashedPass)); //Execute the Query
        $row =$stmt->fetch(); //fetch the data
        $count = $stmt->rowCount(); //Count how many records matches the query
        
        
        // if count > 0 the user exists 
        if($count > 0 ){
            $_SESSION['Username'] = $username; //Register Session name
            $_SESSION['ID'] = $row['UserID']; //Register Session ID
            header('Location: dashboard.php'); //Redirect to dashboard

            exit();
        }
        
        
    }
?>
   
    <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" > 
         <h4>Admin login</h4>
        <input type="text"  class="form-control" name="user" placeholder="username" autocomplete="off"/>
        <input type="password" class="form-control"  name="pass" placeholder="password" autocomplete="new-password"/>
        <input type="submit" class="btn btn-primary btn-block" value="Login"/>



    </form>
    

<?php include $tpl . "footer.php"; ?>