<?php
session_start();
include "db_conn.php";

    $check_username = $_POST["username"];
    $check_password = $_POST["password"];
    $sql = "SELECT username, password, type FROM user";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            $admin_username = $row["username"];
            $admin_password = $row["password"];
            $admin_type = $row["type"];


            if($check_username==$admin_username && $check_password==$admin_password){
               function redirect($url) {
                    header('Location: '.$url);
                    die();
                }
                
                if($admin_type=="admin"){
                     redirect('admin.php');
                    
                }else if($admin_type=="user") {
                    redirect('user.php');
                }      
                
            }
        }
        function redirect($url) {
            header('Location: '.$url);
            die();
        }
        redirect('index.php');

      } 
      else {
        function redirect($url) {
            header('Location: '.$url);
            die();
        }
        redirect('index.php');
    }
    // if(empty($admin_username)){
    //     header("Location: ")
    // }
?>




