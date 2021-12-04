<?php include('partials/menu.php'); ?>

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br />
                <?php 
                    // whether $_SESSION['add'] is declared and different than null
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add']; //
                        unset($_SESSION['add']); // remove session message
                    }

                    if(isset($_SESSION['delete'])) {
                        echo $_SESSION['delete']; 
                        unset($_SESSION['delete']); 
                    }

                    if(isset($_SESSION['update'])){
                        echo $_SESSION['update']; 
                        unset($_SESSION['update']); 
                    }
                ?>
                <br /><br/>
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br /><br /><br />
                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    
                    <?php
                        // Query to Get all Admin
                        $sql="SELECT * FROM tbl_admin";
                        // Execute the quey
                        $res = mysqli_query($conn, $sql); 
                        if($res==TRUE){
                            // count rows to check whether we have data in database or not
                            $count = mysqli_num_rows($res); 
                            $sn = 1; 
                            if($count > 0){
                                // get data row by row
                                while($row=mysqli_fetch_assoc($res)){
                                    $id=$row['id']; 
                                    $full_name=$row['full_name']; 
                                    $username=$row['username']; 

                                    // display the values in table
                                    ?>
                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>/admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL; ?>/admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                            <a href="<?php echo SITEURL; ?>/admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {

                            }

                        } else {

                        }
                    ?>

                </table>

            </div>
        </div>
        <!-- Main Content Section Ends -->


<?php include('partials/footer.php') ?>

