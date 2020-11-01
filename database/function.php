<?php


if(isset($_POST['login'])){
	       $email = $_POST['txt_email'];
		   $pw = $_POST['txt_pwd'];
		   
		   $sql = "Select * from users where Email='$email' && Password='$pw'";
		   $result = connectDb($sql);
			
		   $num=mysqli_num_rows($result);
		  //echo "<script>alert('$num');</script>";
		   if($num==1){
		
			
				 if ($result->num_rows>0){
			 while($row=$result->fetch_assoc())
			 {
			  $usertype=$row['ut'];
			  $fname = $row['Fname'];
			   }
			  session_start();
			   
		   if($usertype==0)
		   {echo '<script> alert("Successfully Login"); </script>';
        header('Location:../index');}
		   else if($usertype==1) 
		   {echo '<script> alert("Successfully Login"); </script>';
        header('Location:../admin/dashboard');}  
		  
		   }
		   }

		   else{
			   echo '<script> alert("Login Failed"); </script>';
        header('Location:../index.');
		   }
		   
		  
}


if(isset($_POST['insertdata-user'])){
	$fname = $_POST['txt_fname'];
		   $lname = $_POST['txt_lname'];
		    $nic = $_POST['txt_nic'];
           $tp = $_POST['txt_tp'];
           $addr = $_POST['txt_addr'];
		   $email = $_POST['txt_email'];
		   $pw = $_POST['txt_pwd'];  
		   $ut=0;
	
    $sql = "INSERT INTO users VALUE ('', '$nic', '$fname', '$lname', '$addr', '$tp', '$email', '$pw','$ut')";
   $result = connectDb($sql);

    if($result)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:../admin/users');
    }
    else
    {
		echo '<script> alert("Data Not Saved"); </script>';
		
    }
			
	
}

if(isset($_POST['insertdata-admin'])){
        	$fname = $_POST['txt_fname'];
		   $lname = $_POST['txt_lname'];
		    $nic = $_POST['txt_nic'];
           $tp = $_POST['txt_tp'];
           $email = $_POST['txt_email'];
		   $pw = $_POST['txt_pwd'];  
		   $ut=1;
	
	$sql = "INSERT INTO users VALUE ('', '$nic', '$fname', '$lname','', '$tp', '$email', '$pw','$ut')";

   $result = connectDb($sql);

echo $result;
    if($result)
    {
		echo '<script> alert("Data Saved"); </script>';
		
		
        header('Location:../admin/admin');
    }
    else
    {
		echo '<script> alert("Data Not Saved"); </script>';
		
    }
}
	

if(isset($_POST['updatedata-user'])){
		$id = $_POST['id'];
        
          $fname = $_POST['txt_fname'];
		   $lname = $_POST['txt_lname'];
            $nic = $_POST['txt_nic'];
            $addr = $_POST['txt_addr'];
		   $tp = $_POST['txt_tp'];
		   $email = $_POST['txt_email'];
		 

        $sql = "UPDATE users SET Fname='$fname', Lname='$lname', Nic='$nic', Address='$addr', Tp='$tp', Email='$email' WHERE id='$id'  ";
		$result = connectDb($sql);
			

        if($result)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../admin/users");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
		}
	}

	if(isset($_POST['updatedata-admin'])){
		$id = $_POST['id'];
        
          $fname = $_POST['txt_fname'];
		   $lname = $_POST['txt_lname'];
            $nic = $_POST['txt_nic'];
         		   $tp = $_POST['txt_tp'];
		   $email = $_POST['txt_email'];
		 

        $sql = "UPDATE users SET Fname='$fname', Lname='$lname', Nic='$nic', Tp='$tp', Email='$email' WHERE id='$id'  ";
		$result = connectDb($sql);
			

        if($result)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../admin/admin");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
		}
	}

if(isset($_POST['deletedata-user'])){
 $id = $_POST['delete_id'];

	$sql = "DELETE FROM users WHERE id='$id'";
	 $result = connectDb($sql);
  
    if($result)
    {
		echo '<script> alert("Data Deleted"); </script>';
	
        header("Location:../admin/users");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

if(isset($_POST['deletedata-admin'])){
 $id = $_POST['delete_id'];

	$sql = "DELETE FROM users WHERE id='$id'";
	 $result = connectDb($sql);
  
    if($result)
    {
		echo '<script> alert("Data Deleted"); </script>';
	
        header("Location:../admin/admin");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}






        function connectDb($sql){
			/* coonectDb function make the database connection */
			   $con = mysqli_connect('localhost', 'root', '','tworings');
			 		  
			$result= mysqli_query($con,$sql) or die(mysqli_error( $con));
			closeDb($con);
			 
			return $result;
			  
		}

		function closeDb($con){
			
			/* closeDb function close the database connection */
			mysqli_close($con);
			
		}

		
		
		


	

	
?>
