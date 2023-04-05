<?php
    include "config.php";
    if(isset($_FILES['filetoupload'])){
     $errors = array();
     $file_name = $_FILES['fileToUpload']['name'];
     $file_size = $_FILES['fileToUpload']['size'];
     $file_temp = $_FILES['fileToUpload']['temp_name'];
     $file_type = $_FILES['fileToUpload']['type'];
     $file_ext = explode('.',$file_name);

    }



    $title = mysqli_real_escape_string($conn , $_POST['post_title']);
    $description = mysqli_real_escape_string($conn , $_POST['postdesc']);
    $category = mysqli_real_escape_string($conn , $_POST['category']);
    $date = date("d M, Y");
    $author = $_SESSION['user_id'];
?>