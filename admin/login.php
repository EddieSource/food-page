<html>
    <head>
        <title>Login - Food Order System </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <div class="login" >
            <h1 class="text-center">Login</h1>
            <form action="" method="POST">
                Username: 
                <input type="text" name="username" placeholder="Enter Username"/><br><br>
                Password: 

                <input type="password" name="password" placeholder="Enter Password"/><br>
                <br />
                <input type="submit" name="submit" value="Login" class="btn-primary">
                <br><br>
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['submit'])){
        
    }
?>