<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br/> <br/>
        <?php 
            if(isset($_GET['id'])) {
                $id=$_GET['id']; 
            }
        ?>
        <form action="" method="POST">
            <tr>
                <td>Old Password: </td>
                <td>
                    <input type="password" name="current_password" placeholder="Old Password"/>
                </td>
            </tr>

            <tr>
                <td>New Password: </td>
                <td>
                    <input type="password" name="new_password" placeholder="New Password"/>
                </td>
            </tr>

            <tr>
                <td>Confirm Password: </td>
                <td>
                    <input type="password" name="confirm_password" placeholder="Old Password"/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="submit" name="submit" value="Change Password" class="btn-secondary"/>
                </td>
            </tr>
        </form>
    </div>
</div> 

<?php
    // check whether the submit button is clicked or not
    if(isset($_POST['submit'])) {
        
    }
?>
<?php include('partials/footer.php'); ?>