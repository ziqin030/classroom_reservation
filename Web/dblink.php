<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="1;url=使用者設定.php">
</head>

<body>
    <?php
    $method = $_GET['method'] ?? null;
    if (empty($method)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //step1
        $link = mysqli_connect('localhost', 'root', '12345678', 'users');
        $sql = "update accounts set email='$email',password='$password' where username='$username'";
        if (mysqli_query($link, $sql)) {
            echo "修改成功", "<br>";
        } else {
            echo "修改失敗", "<br>";
        }
    } elseif ($method == "delete") {
        $username = $_GET['username'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'users');
        $sql = "delete from accounts where username='$username'";
        if (mysqli_query($link, $sql)) {
            echo "刪除成功", "<br>";
        } else {
            echo "刪除失敗", "<br>";
        }
    }

    ?>
</body>

</html>