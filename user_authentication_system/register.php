<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center text-uppercase text-primary my-5">Regiseration Form</h1>

    <div class="row m-0">
        <div class="col-6 mx-auto">
            <form action="" method="post">
                <label for="">Name</label>
                <input type="text" class="form-control mb-3" name="name" placeholder="Enter Your Name Here">

                
                <label for="">UserName</label>
                <input type="text" class="form-control mb-3" name="username" placeholder="Enter Your UserName Here">

                
                <label for="">Email</label>
                <input type="text" class="form-control mb-3" name="email" placeholder="Enter Your Email Here">

                
                <label for="">Password</label>
                <input type="text" class="form-control mb-3" name="password" placeholder="Enter Your Password Here">

                <p>Already have an account? <a href="login.php">Login</a></p>
                <input type="submit" value="Register" name="formsubmit" class="form-control  btn btn-success text-white p-2 rounded">          
            </form>

            <?php
                include 'connection.php';

            if(isset($_POST['formsubmit'])){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Check if username already exists
                $checkuser = "SELECT * from users where username ='$username'";
                $execute_checkuser =mysqli_query($conn,$checkuser);
                if(mysqli_num_rows($execute_checkuser)>0){
                    echo"
                        <script>
                            alert('UserName already Taken!Try another');
                        </script>
                    ";

                }else{
                    $query ="Insert into users (name,username,email,password) values ('$name','$username','$email','$password')";

                    $result = mysqli_query($conn ,$query);
    
                    if($result){
                        echo"
                        <script>
                            alert('User Registered Successfully');
                            window.location.href ='login.php'
                        </script>
                        ";
                    }
                }

               
            }
            
            
            ?>
        </div>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>