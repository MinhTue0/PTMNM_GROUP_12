<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['p_id'])) {
    
    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "../../uploads/" . $file_name);
            $link = "../../uploads/" . $file_name;
        } else {
            print_r($errors);
        }
    }

    $date      = $_POST['date'];
    $age       = rtrim($_POST['age']);
    $full_name = rtrim($_POST['p_name']);
    $email     = rtrim($_POST['email']);
    $address   = rtrim($_POST['add']);
    $contact   = rtrim($_POST['contact']);
    $height    = rtrim($_POST['height']);
    $weight    = rtrim($_POST['weight']);
    
    $p_id = $_POST['p_id'];
    
    mysqli_query($con, "UPDATE user_data SET name='$full_name', pic_add='$link',address='$address', contact='$contact', email='$email', height='$height', weight='$weight', joining='$date', age='$age' WHERE newid='$p_id'");
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
    
}
?>
