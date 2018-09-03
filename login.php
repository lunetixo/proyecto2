<?php  
    session_start();  
    
    $username = $_POST['txtusuario'];  
    $password = $_POST['txtpassword']; 
    //$password = md5($_POST['txtpassword']); 

    $mysqli=mysqli_connect('localhost','root','','proyecto2');  
    $query = "SELECT * FROM usuarios WHERE user='$username' AND pass='$password'";  
    $result = mysqli_query($mysqli,$query)or die(mysqli_error());  
    $num_row = mysqli_num_rows($result);  
    $row=mysqli_fetch_array($result);  
    if( $num_row >=1 ) {  
    echo 'true';  
    $_SESSION['user_name']=$row['username'];  
    header('Location: convenios.php');
        }  
        else{  
            header('error.php'); 
        }  
?>  