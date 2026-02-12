<?php 

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<h1 class="text-center text-uppercase text-primary my-5">Login Form</h1>

    <div class="row m-0">
        <div class="col-6 mx-auto">
            <form action="" method="post">
             
                
                <label for="">UserName</label>
                <input type="text" class="form-control mb-3" name="username" placeholder="Enter Your UserName Here">

             
                <label for="">Password</label>
                <input type="text" class="form-control mb-3" name="password" placeholder="Enter Your Password Here">

                <p>Don't have an account? <a href="register.php">Register</a></p>
                <input type="submit" value="login" name="formsubmit" class="form-control  btn btn-success text-white p-2 rounded">          
            </form>
            <?php
               

            if(isset($_POST['formsubmit']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = "SELECT * from users where username ='$username'";
                $result =mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){

                    $query1= "SELECT * from users where username ='$username' AND password ='$password'";
                    $result1=mysqli_query($conn,$query1);

                    if(mysqli_num_rows($result1)>0){
                        echo"
                        <script>
                            alert('Login Successfully');
                            window.location.href='home.php';
                        </script>
                    ";
                    }else{
                        echo"
                        <script>
                            alert('Invalid Password');
                        </script>
                        ";
                     }

               
                }else{
                    echo"
                        <script>
                             alert('User not exist.Register yourself');
                        </script>
                    ";
                }
            }
            
            ?>
        </div>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>