what is the difference between session and cookies?
Ans - 
    - session and cookies both are stored user specific data.

    -session are stored in server side and cookies are stored in client side.
    session are normally temporary and cookies can stored in user browser.

    - session expires when browser close and cookies expired depending on the lifetime we set for it.
    
<?php 
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value,time()+3600)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
