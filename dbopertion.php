<?php
   session_start();
include_once 'includes/conn.php';

if(isset($_POST['crbtn']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['epass'];
    $rpassword=$_POST['cpass'];

    $photo=$_FILES['photo']['name'];
		$upload="upload/".$photo;
    move_uploaded_file($_FILES['photo']['tmp_name'], $upload);

    if($password != $rpassword){
        echo "<script>alert('Enter Password And Reenter Password Are not same')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
    }
    else
    {
        $query="select * from customer where email='$email'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            echo "<script>alert('the emailid is already registrate do you already register then login')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        
        }
        else
        {
          
            $query="insert into customer(fname,lname,photo,address,mobile,email,pass,role)values('$fname','$lname','$upload','$address','$mobile','$email','$password','Customer')";
            $result=mysqli_query($conn,$query);
           if($result)
           {
             echo "<script>alert('Customer Register Sucessfully.')</script>";
               echo "<script>window.open('index.php','_self')</script>";
           }
        }
    }
}


if(isset($_POST['srbtn']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $stype=$_POST['stype'];
    $sname=$_POST['sname'];
    $stfrom=$_POST['stfrom'];
    $stto=$_POST['stto'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['epass'];
    $rpassword=$_POST['cpass'];

    $photo=$_FILES['photo']['name'];
		$upload="upload/".$photo;
    move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
    
    $sphoto=$_FILES['sphoto']['name'];
    $supload="upload/".$sphoto;
move_uploaded_file($_FILES['sphoto']['tmp_name'], $supload);

    if($password != $rpassword){
        echo "<script>alert('Enter Password And Reenter Password Are not same')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
    }
    else
    {
        $query="select * from service where email='$email'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            echo "<script>alert('the emailid is already registrate do you already register then login')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        
        }
        else
        {
          
            $query="insert into service(fname,lname,photo,address,stype,sname,sphoto,stimefrom,stimeto,mobile,email,pass,role)values('$fname','$lname','$upload','$address','$stype','$sname','$supload','$stfrom','$stto','$mobile','$email','$password','Service Provider')";
            $result=mysqli_query($conn,$query);
           if($result)
           {
             echo "<script>alert('Service Provider Register Sucessfully.')</script>";
               echo "<script>window.open('index.php','_self')</script>";
           }
           else{
               echo "error fined";
           }
        }
    }
}

if(isset($_POST['rpass']))
{
    $role=$_POST['role'];
    $email=$_POST['email'];
    $password=$_POST['epass'];
    $rpassword=$_POST['cpass'];
   if($role =='Service Provider')
   {
     $query="select * from service where email='$email'";
     $result=mysqli_query($conn,$query);
     if(mysqli_num_rows($result)==1)
      {
         if($password!= $rpassword)
           {
              echo "<script>alert('Enter Password And Reenter Password Are not same')</script>";
              echo "<script>window.open('index.php','_self')</script>";
            }
            else
            {
                $query="UPDATE service SET pass = '$password' WHERE email ='$email'";
                $result=mysqli_query($conn,$query);
                if($result)
                  {
                      echo "<script>alert('pasword change successfully.')</script>";
                      echo "<script>window.open('index.php','_self')</script>";
                  }

            }
       }
       else
       {
         echo "<script>alert('the emailid is not registrate enter right emaid ya create new account')</script>";
         echo "<script>window.open('forpass.php','_self')</script>";
       }
    }
   else{
    $query="select * from customer where email='$email'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
      if($password!= $rpassword)
      {
        echo "<script>alert('Enter Password And Reenter Password Are not same')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }else
      {
        $query="UPDATE `customer` SET `pass` = '$password' WHERE `email` ='$email'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
          echo "<script>alert('pasword change successfully.')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
      }
   }
   else
   {
     echo "<script>alert('the emailid is not registrate enter right emaid ya create new account')</script>";
     echo "<script>window.open('index.php','_self')</script>";
   }
}
}

if(isset($_POST['luser']))
{
    $role=$_POST['role'];
	$username=$_POST['email'];
	$password=$_POST['pass'];
    if($role =='Service Provider')
    {
        $query="select * from service where email='$username' and role='$role' and pass='$password'";
        $result=mysqli_query($conn,$query);
        foreach($result as $row)
        {
            $_SESSION['id']=$row['id'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['photo']=$row['photo'];
            $_SESSION['address']=$row['address'];
            $_SESSION['mobile']=$row['mobile'];
            $_SESSION['email']=$row['email'];
            $_SESSION['password']=$row['pass'];
            $_SESSION['role']=$row['role'];
        }
        if('Service Provider'==$role && $_SESSION['email']==$username &&  $_SESSION['password']==$password)
          {
            $_SESSION['file']='service.php';
            echo "<script>window.open('service.php','_self')</script>";
          }
          else
          {
            echo "<script>alert('you enter wrong credential.')</script>";
            echo "<script>window.open('index.php','_self')</script>";
          }
    }
    else
    {
        $query="select * from customer where email='$username' and role='$role' and pass='$password'";
        $result=mysqli_query($conn,$query);
        foreach($result as $row)
        {
            $_SESSION['id']=$row['id'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['photo']=$row['photo'];
            $_SESSION['address']=$row['address'];
            $_SESSION['mobile']=$row['mobile'];
            $_SESSION['email']=$row['email'];
            $_SESSION['password']=$row['pass'];
            $_SESSION['role']=$row['role'];
        }
        if('Customer'==$_SESSION['role'] && $_SESSION['email']==$username &&  $_SESSION['password']==$password)
        {
            $_SESSION['file']='customer.php';
            echo "<script>window.open('customer.php','_self')</script>";
        }
        if('Admin'==$_SESSION['role'] && $_SESSION['email']==$username &&  $_SESSION['password']==$password)
        {
            $_SESSION['file']='admin.php';
            echo "<script>window.open('admin.php','_self')</script>";
        }
        else
          {
            echo "<script>alert('you enter wrong credential.')</script>";
            echo "<script>window.open('index.php','_self')</script>";
           
          }
    }
}

if(isset($_POST['upbtn']))
{
    $id=$_POST['id'];
    $role=$_POST['role'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $photo=$_FILES['photo']['name'];
    if($address=="")
    {
      $address= $_SESSION['address'];
    }
    if($photo=="")
    {
      $photo= $_SESSION['photo'];
      $upload=$photo;
      move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
    }
    else{
      $upload="upload/".$photo;
      move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
    }
		

    if($role =='Service Provider')
    {
      $query="UPDATE `service` SET `fname` = '$fname',`lname` = '$lname',`photo` = '$upload',`address` = '$address',`mobile` = '$mobile',`email` = '$email' WHERE `id` ='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
          echo "<script>alert('update profile suceessfuly.')</script>";
            echo "<script>window.open('sprofile.php','_self')</script>";
        }
    }
    else{
      $query="UPDATE `customer` SET `fname` = '$fname',`lname` = '$lname',`photo` = '$upload',`address` = '$address',`mobile` = '$mobile',`email` = '$email' WHERE `id` ='$id'";
      $result=mysqli_query($conn,$query);
      if($result)
      {
        echo "<script>alert('update profile suceessfuly.')</script>";
        if($role=='Customer')
        {
          echo "<script>window.open('cprofile.php','_self')</script>";
        }
        else{
          echo "<script>window.open('aprofile.php','_self')</script>";
        }
          
      }
    }
}


if(isset($_POST['aspbtn']))
{
    $id=$_POST['id'];
  $query="UPDATE `service` SET `astatus` = '0' WHERE `id` ='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
          echo "<script>alert('Approve Service provider suceessfuly.')</script>";
            echo "<script>window.open('aaprove.php','_self')</script>";
        }
}
if(isset($_POST['dspbtn']))
{
    $id=$_POST['id'];
  $query="DELETE FROM service WHERE id=$id";
  $file=$_POST['filename'];
        $result=mysqli_query($conn,$query);
        if($result)
        {
          if($file=="manageuser"){
            echo "<script>alert('Delete Service provider suceessfuly.')</script>";
            echo "<script>window.open('amanageuser.php','_self')</script>";
          }else{
            echo "<script>alert('Delete Service provider suceessfuly.')</script>";
            echo "<script>window.open('aaprove.php','_self')</script>";
          }
       
        }
}

if(isset($_POST['dcbtn']))
{
    $id=$_POST['id'];
  $query="DELETE FROM customer WHERE id=$id";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo "<script>alert('Delete Customer suceessfuly.')</script>";
            echo "<script>window.open('amanageuser.php','_self')</script>";
        }
}

if(isset($_POST['sspbtn']))
{
    $id=$_POST['id'];
    $fname=$_POST['filename'];
    $_SESSION['spid']=$id;
    if($fname=="customer")
    {
      echo "<script>window.open('cnotifictionv.php','_self')</script>";
    }elseif($fname=="acustomer") {
      echo "<script>window.open('cappointv.php','_self')</script>";
    }
    else{
      echo "<script>window.open('aaprovev.php','_self')</script>";
    }
    
}
if(isset($_POST['subtn']))
{
    $id=$_POST['id'];
    $role=$_POST['role'];
    if($role=="Customer")
    {
      $_SESSION['spid']=$id;
      $_SESSION['tname']="customer";
    }
    else{
      $_SESSION['spid']=$id;
      $_SESSION['tname']="service";
    }
    echo "<script>window.open('amanageuserv.php','_self')</script>";
}


if(isset($_POST['rsp']))
{
  $spid=$_POST['id'];
  $cid=$_POST['cid'];
  $query="insert into appoint(spid,cid,astatus)values('$spid','$cid','1')";
  $result=mysqli_query($conn,$query);
 if($result)
 {
   echo "<script>alert('service provider appoint Sucessfully.')</script>";
     echo "<script>window.open('cappoint.php','_self')</script>";
 }
}

if(isset($_POST['dap']))
{
  $id=$_POST['aid'];
  $query="UPDATE `appoint` SET `astatus` = '2' WHERE `id` ='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
          echo "<script>alert('Appointment suceessfuly completed.')</script>";
            echo "<script>window.open('cnotifiction.php','_self')</script>";
        }
}
if(isset($_POST['acr']))
{
  $id=$_POST['aid'];
  $datetime=$_POST['datetime'];
  $query="UPDATE `appoint` SET `astatus` = '0' ,`time` = '$datetime' WHERE `id` ='$id'";

        $result=mysqli_query($conn,$query);
        if($result)
        {
          echo "<script>alert('Appointment Accepted suceessfuly.')</script>";
            echo "<script>window.open('snotifiction.php','_self')</script>";
        }
}
if(isset($_POST['vcd']))
{
  $id=$_POST['id'];
  $_SESSION['cid']=$id;
  echo "<script>window.open('snotifictionv.php','_self')</script>";

}
?>