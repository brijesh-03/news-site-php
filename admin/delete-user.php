<?php 
    include "config.php";
    include "config.php";
    if($SESSION['user_role'] == "0"){
    header("Location: {$hostname}/admin/post.php");
}
    $user_id = $_GET['id'];

    $sql = "DELETE FROM user where user_id = {$user_id}";

    if(mysqli_query($conn , $sql)){
        header("Location: {$hostname}/admin/users.php");
    }else{
        echo "<p style='color:red; text-align:center;margin:10px 0;'>Can't delete the user Record.</p>";
    }

    mysqli_close($conn);
?>