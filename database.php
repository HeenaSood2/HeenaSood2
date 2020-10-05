<?php
$conn=mysqli_connect("localhost", "root", "", "tourism")or die("Can't Connect to Databasa");
session_start();
       if(isset($_POST['login']))
       {
             $mail=$_POST["mail"];
              $Pass=$_POST["pass"];
             $query=mysqli_query($conn,"select * from login where Email='$mail' and Password='$Pass'");
              $count=mysqli_num_rows($query);
              if($count!=0)
              {
                    echo "<script>location.href='index.php'</script>";
                     
              }
              else
              {
                    echo "<script>alert('Wrong username or password');
                    location.href='frontPage.php'
                    </script>";
              }
         
            }

            if(isset($_POST['register']))
            {
                  $fname=$_POST['fname'];
			$Lname=$_POST['Lname'];
			$password=$_POST['pass'];
			$mail=$_POST['mail'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
	        $query="insert into login(Email,Firstname,Lastname,City,Password,Contact)
			values('$mail','$fname','$Lname','$city','$password','$contact')";
			$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
            if($result)
            {
				
				$_SESSION['log']=1;
				echo "<script>location.href='frontPage.php'</script>";
			
			}
			
            else{
                
                echo"<script>
                alert('Can't able to register, Please try again');
                location.href='frontPage.php'
                </script>";
            }
	   
            }

         ?>