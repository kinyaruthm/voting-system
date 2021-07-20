<?php
session_start();
include('config1.php');
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=$_POST['password'];


 $results=mysqli_query($con, "SELECT * FROM admin WHERE email='$email' AND password='$password'");

                      $admin_check=mysqli_num_rows($results);
                      if($admin_check==1)
                      {
                        $row=mysqli_fetch_assoc($results);

                        $_SESSION["email"]=$row["email"];
                        $_SESSION["password"]=$row["password"];
                     //$_SESSION["level"]=$row["level"];
                        

                        echo "<script>alert('Login successful!!');location.href='addpost.php';</script>";


                      }

                      else
                      {

                        echo"<script>alert('Sorry. Invalid details!!!');</script> ";
                      }

                
  
}
?>

  <h4 align="center">TTU Voting system | Admin Login</h4>
                <div class="admin" align="center">
                                           <form action="admin.php" name="signin" method="post" enctype="multipart/form-data">
                                            <tr><td><label for="email">email</label></td><td>
                                              
                                                   <input id="email" type="text" name="email" class="validate" autocomplete="off" required ></td></tr>
                                                   
                                               
                                               <tr><td><label for="password">Password</label></td><td>
                                                   <input id="password" type="password" class="validate" name="password" autocomplete="off" required></td></tr>
                                                   
                                              
                                               
                                                
                                                   <tr><td ><input type="submit" name="signin" value="Sign in"></td></tr>
                                              
                                           </form>
                         </div>
        
  <?php
    
include "footers.php";
    
  ?>