<?php
    // 0. include constants.php file here
    include('../config/constants.php'); 

    // 1. get the ID of Admin to be deleted
    $id = $_GET['id']; 

    // 2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id"; 

    // 3. Redirect to Manage Admin page with message (success/error)
    $res = mysqli_query($conn, $sql); 

    // check whether the query executed successfully or not
    if($res==true){
        // success. create session variable to display message
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>"; 
        header('location:'.SITEURL.'/admin/manage-admin.php'); 
    } else {
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin</div>"; 
        header('location:'.SITEURL.'/admin/manage-admin.php'); 
    }
?>