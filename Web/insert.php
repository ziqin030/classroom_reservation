<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="2;url=login.php">
</head>

<body>
    <?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //step1
        $link = mysqli_connect('localhost', 'root', '12345678', 'users');
        //step3
        $sql = "insert into accounts(username,email,password,level) values('$username','$email','$password','user')";
        if(mysqli_query($link,$sql)){
            echo "新增成功" ,"<br>";
        }
        else{
            echo "新增失敗" ,"<br>";
        }
    ?>
</body>

</html>