<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br/><br/>

        <?php
            // 1. get the selected admin
            $id = $_GET['id']; 

            // 2. create sql query
            $sql = "SELECT * FROM tbl_admin WHERE id=$id"; 

            // 3. execute the query
            $res = mysqli_query($conn, $sql); 

            // 4. check whether the query is executed or not
            if($res==true) {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res); 
                // Check whether we have admin data or not
                if($count == 1) {
                    // get the details
                    $row = mysqli_fetch_assoc($res); 
                    $full_name = $row['full_name']; 
                    $username=$row['username']; 
                } else {
                    header('location:'.SITEURL.'admin/manage-admin.php'); 
                }
            }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
    // check whether the submit button is clicked or not
    if(isset($_POST['submit'])) {
        // get all value from form
    }

?>
<?php include('partials/footer.php'); ?>