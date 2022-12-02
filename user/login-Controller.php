<?php
$name = $_POST['name'];
$username = $_POST['loginID'];
$pass = $_POST['password'];
$sex = $_POST['sex'];

$conn = mysqli_connect('localhost', 'root', '', 'dbgym')
    or die('Could not connect to MySQL: ' . mysqli_connect_error());

$check = "SELECT * FROM `auth_user` WHERE `login_id` LIKE '$username';";
$result       = mysqli_query($conn, $check);
$count        = mysqli_num_rows($result);

if ($count == 0) {
    $sql = "INSERT INTO `auth_user`(
                    `id`, 
                    `login_id`, 
                    `pass_key`, 
                    `security`, 
                    `level`, 
                    `sex`, 
                    `name`) VALUES (
                        '',
                        '$username',
                        '$pass',
                        '$username',
                        '1',
                        '$sex',
                        '$name')";
    if ($conn->query($sql)) {
        $status = "success";
        $response = "Đăng ký thành công";
    } else {
        $status = "failed";
        $response = "Something is wrong: <br>" . $sql;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
    $conn->close();
}else{
    $status = "failed";
    $response = "UserName đã được sử dụng";
}
