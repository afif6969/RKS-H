<html>
    <head>
        <?php
        session_start();
        include"koneksi.php";
        ?>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    <body>
        
        
        <form method="post">
            
            <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="" method="post">
            <h3 class="text-center text-info">Login</h3>
            <div class="form-group">
            <label for="username" class="text-info">Username:</label><br>
            <input type="text" name="username" id="username" class="form-control"></div>
            <div class="form-group">
            <label for="password" class="text-info">Password:</label><br>
            <input type="text" name="password" id="password" class="form-control"></div>
            <div class="form-group">
            <label  class="text-info"><h4>Masukan Username dan Password</h4></label></div>
            <input type="submit" name="masuk" class="btn btn-info btn-md" value="submit">
        <div>

        

        </div>

        


        <?php  
        if (isset($_POST['masuk'])){
            $username= $_POST['username'];
            $pass= $_POST['password'];

            $query = "SELECT * FROM data WHERE username = '{$username}' ";
            $select_user_query = mysqli_query($konek, $query);

            $username_db = "";
            $password_db = "";


            while ($row = mysqli_fetch_assoc($select_user_query)) {
                $username_db = $row['username'];
                $password_db = $row['password'];
              }

              if ($username == $username_db && $pass == $password_db) {
                header("Location: masukk.html");
            }else{
                echo "Username atau Password salah";
            }

        }
        ?>        
    </body>
    
</html>