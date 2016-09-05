<?php

    /*
    ============================
    --Manage members Page
    -- You can add | delete | edit | update members here
    ============================
    */
 
    session_start();

    $pageTitle ='Members';

    if(isset($_SESSION['Username']))
    {
        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
        
        
        //start Manage page
        
        if ($do == 'manage'){ //Manage Page
            
            
        //start edit page
            
        }elseif($do == 'edit'){ //Edit Page 
            
            // Check If the GET REQUEST userid is nummeric and Get the integer value 
            $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;    
            
            // Check for the userID in the database and select the data depending on this ID
            $stmt=$con->prepare("SELECT  *  FROM  users Where UserID = ? LIMIT 1"); 
            $stmt->execute(array($userid));
            $row= $stmt->fetch();
            $count= $stmt->rowCount();
            
            //If there is a match , Show the form 
            if($count > 0 ){ ?>
                
                 
            
               <h1 class="text-center">Edit Member</h1>
                <div class="container">
                    <form class="form-horizontal" action="?do=update" method="POST">
                        <input type="hidden" name="userid" value="<?php echo $userid?>" />
                        <!-- Start Username Field !-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="username" class="form-control" value="<?php echo $row['Username'] ?>" autocomplete="off"/>
                            </div>
                        </div>
                            <!-- End Username Field !-->

                            <!-- Start Password Field !-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="password" name="password" class="form-control" autocomplete="new-password"/>
                            </div>
                        </div>
                            <!-- End Password Field !-->

                            <!-- Start Email Field !-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label ">Email</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="email" value="<?php echo $row['Email'] ?>" class="form-control"/>
                            </div>
                        </div>    
                            <!-- End Email Field !-->
                            <!-- Start Fullname Field !-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label ">Fullname</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="fullname" value="<?php echo $row['Fullname'] ?>"class="form-control"/>
                            </div>
                        </div> 
                            <!-- End Fullname Field !-->

                            <!-- Start Sumbit button !-->
                        <div class="form-group form-group-lg">
                            <div class="col-sm-offset-2 col-sm-10 ">
                                <input type="submit" value="Update" class="btn btn-primary btn-lg"/>
                            </div>
                        </div>     
                            <!-- End Sumbit button !-->
                    </form>



                </div>
              <?php  }
            
            // If there is no match for the ID ,  Show an error 
            else{
                echo 'There is no such ID';
            }
            }
             elseif ($do == 'update') {
            //Update Page
            
            
             echo "<h1 class='text-center'>Update Member</h1>";
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $id         =   $_POST['userid'];
                $user       =   $_POST['username'];
                $email      =   $_POST['email'];
                $fullname   =   $_POST['fullname'];
                
                // Update the datebase with this data 
                $stmt = $con->prepare("UPDATE users SET Username = ?, Fullname = ?, Email = ? WHERE UserID = ?");
                $stmt->execute(array($user,$fullname,$email,$id));  
                
                //Echo success Message
                
                echo '<h2 class="text-center">Records Updated</h2>';
                
            } else {
                echo '<h2 class="text-center">Sorry You cant update this page</h2>';
            
            
        }

        }
       
        
        include $tpl . "footer.php";
    }else {
        
        header('Location: index.php');
        exit();
    }