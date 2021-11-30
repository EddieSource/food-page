<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br/><br/>
        <?php 
            if(isset($_SESSION['add'])){
                echo $_SESSION['add']; // dispaly session message if set
                unset($_SESSION['add']); // remove session message
            }
        ?>

        <form actions="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"  placeholder="Enter Your Username"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table> 
        </form>
    </div>
</div>
<?php include("partials/footer.php"); ?>

<?php  
    // process the value from form and save it in database
    // check whether the submit button is clicked or not

    // whether the value(use the name property) on submit is passed using post method or not 
    if(isset($_POST['submit'])) {
        // 1. get data from form (use name property)
        $full_name = $_POST['full_name']; 
        $username = $_POST['username']; 
        $password = md5($_POST['password']); // password encryption with md5 
        
        // 2. create sql query
        $sql = "INSERT INTO tbl_admin SET 
            full_name = '$full_name', 
            username='$username', 
            password='$password'
        "; 
        
        // 3. execute query and save data in database
        $res = mysqli_query($conn, $sql) or die(mysqli_error()); 

        //4. check whether the data is inserted or not
        if($res==TRUE){
            // Data Inserted
            // create a session variable to display message
            $_SESSION['add'] = "Admin Added Successfully";
            // Redirect page to Manage Admin
            header("location: ".SITEURL."/admin/manage-admin.php"); 
        }
        else {
            // failed
            $_SESSION['add'] = "Failed To Add Admin";
            // Redirect page to Add Admin
            header("location: ".SITEURL."/admin/add-admin.php"); 
        }

        
    }
?>