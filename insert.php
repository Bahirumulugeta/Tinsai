<?php
$fullName=$_POST['fullName'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$birthPlace=$_POST['birthPlace'];
$currentCity=$_POST['currentCity'];
$status=$_POST['status'];
$workStatus=$_POST['workStatus'];
$pNum=$_POST['pNum'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($fullName)||!empty($age)||!empty($sex)||!empty($birthPlace)||
!empty($currentCity)||!empty($status)||!empty($workStatus)||!empty($pNum)||
!empty($email)||!empty($password)){
  
    $conn=new mysqli("localhost","root","","tinsaa");
    if(mysqli_connect_error()){
        die('connectError('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT ="SELECT email From registration Where email=? Limit 1";
        $INSERT="INSERT into registration (fullName,age,sex,birthPlace,currentCity,status,workStatus,pNum,email,password)values (?,?,?,?,?,?,?,?,?,?)";
      //prepare statment
      $stmt=$conn->prepare($SELECT);
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt->bind_result($email);
      $stmt->store_result();
      $rnum=$stmt->num_rows;

      if($rnum==0){
          $stmt->close();
          $stmt=$conn->prepare($INSERT);
          $stmt->bind_param("ssssssssss",$fullName,$age,$sex,$birthPlace,$currentCity,$status,$workStatus,$pNum,$email,$password);
          $stmt->execute();
          header("Location:index.php");

      }
      else{
          echo "some one already registerd with this email";
      }
      $stmt->close();
      $conn->close();
    }
}
?>