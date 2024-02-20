<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require"function.php";
    if(isset($_POST["submit"])){
        $username= strtolower(stripcslashes($_POST["fname"]));
        $email = $_POST["femail"];
        $password = mysqli_real_escape_string($koneksi, $_POST["fpassword"]);
        $repassord

</body>
</html>