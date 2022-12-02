<?php
ob_start();
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
include("db_con.php");
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>gym</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap');

        body {
            scroll-behavior: smooth;
            overflow-x: hidden;

        }

        .custom a {
            color: #fff;
            font-size: 18px;
            text-transform: capitalize;
            font-weight: 600;
            padding: 0px 10px 0px 10px;
            font-family: "Teko", sans-serif;
            position: relative;
            text-transform: uppercase
        }
    </style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <?php
    if (isset($_POST["send"]) and isset($_SESSION['user_data'])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'minhtampro199@gmail.com';
        $mail->Password = 'miqeerdoydqirsev';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $sendmail = $_SESSION['user_data'] . "@gmail.com";
        $body = "I want to join in " . $_POST['name_pri'];

        $mail->setFrom('minhtampro199@gmail.com');
        $mail->addAddress($sendmail);
        $mail->isHTML(true);
        $mail->Subject = "Join in $body";
        $mail->Body = $body;

        $mail->send();
    }

    if(isset($_POST["submitButton"])) {
        $mail2 = new PHPMailer(true);

        $mail2->isSMTP();
        $mail2->Host = 'smtp.gmail.com';
        $mail2->SMTPAuth = true;
        $mail2->Username = 'minhtampro199@gmail.com';
        $mail2->Password = 'miqeerdoydqirsev';
        $mail2->SMTPSecure = 'ssl';
        $mail2->Port = 465;

        $sendmail = $_POST['email_send'];

        $mail2->setFrom('minhtampro199@gmail.com');

        $mail2->addAddress($sendmail);
        $mail2->isHTML(true);
        $mail2->Subject = $_POST['name_mail'];
        $mail2->Body = $_POST['mess_send'];

        $mail2->send();
    }

    if (isset($_POST['send'])) {
        if (isset($_POST['name_pri'])) {
            echo "<script>console.log('" . $_POST['name_pri'] . "')</script>";
        } else {
            echo "<script>alert('Nothing')</script>";
        }
    }
    ?>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html" style="color: white;">
                                        <img src="/img/dotchuoi2.png" alt="" width="50" style="color: white;">
                                        Califonia Gym
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#">Trang chủ</a></li>
                                            <li><a href="#features">Giới thiệu</a></li>
                                            <li><a href="#sale">Khuyễn mãi</a></li>
                                            <li><a href="#pricing">Các gói tập</a></li>
                                            <li><a href="#trainer">HLV</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <?php
                                    if (isset($_SESSION['user_data'])) {
                                        echo '
                                            <div class="main-menu">
                                                <nav>
                                                <ul id="navigation1">
                                                    <li class="custom"><a href="#">' . $_SESSION['user_data'] . ' <i class="ti-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="logout.php">Đăng xuất</a></li>
                                                        </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>';
                                    } else {
                                        echo '<div class="book_btn d-none d-lg-block">
                                            <a href="login.php">Đăng nhập</a>
                                        </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Rèn dũa</span>
                                <h4 style="color: white; font-size: 120px; margin-top: 10px;">CƠ THỂ CỦA BẠN</h4>
                                <p>Rèn dũa thể hình và thể lực một cách chuyên nghiệp</p>
                                <?php
                                if (isset($_SESSION['user_data'])) {
                                    echo '<h4 style="color: white; font-size: 25px">Welcome ' . $_SESSION['user_data'] . '</h4>';
                                } else {
                                    echo '<a href="register.php" class="boxed-btn3">Join Us</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Rèn dũa</span>
                                <h4 style="color: white; font-size: 120px; margin-top: 10px;">SỨC MẠNH CỦA BẠN</h4>
                                <p>Rèn dũa thể hình và thể lực một cách chuyên nghiệp</p>
                                <?php
                                if (isset($_SESSION['user_data'])) {
                                    echo '<h4 style="color: white; font-size: 25px">Welcome ' . $_SESSION['user_data'] . '</h4>';
                                } else {
                                    echo '<a href="register.php" class="boxed-btn3">Join Us</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Rèn dũa</span>
                                <h4 style="color: white; font-size: 120px; margin-top: 10px;">CƠ THỂ CỦA BẠN</h4>
                                <p>Rèn dũa thể hình và thể lực một cách chuyên nghiệp</p>
                                <?php
                                if (isset($_SESSION['user_data'])) {
                                    echo '<h4 style="color: white; font-size: 25px">Welcome ' . $_SESSION['user_data'] . '</h4>';
                                } else {
                                    echo '<a href="register.php" class="boxed-btn3">Join Us</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Rèn dũa</span>
                                <h4 style="color: white; font-size: 120px; margin-top: 10px;">SỨC MẠNH CỦA BẠN</h4>
                                <p>Rèn dũa thể hình và thể lực một cách chuyên nghiệp</p>
                                <?php
                                if (isset($_SESSION['user_data'])) {
                                    echo '<h4 style="color: white; font-size: 25px">Welcome ' . $_SESSION['user_data'] . '</h4>';
                                } else {
                                    echo '<a href="register.php" class="boxed-btn3">Join Us</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area  -->
    <!--/ catagory_area  -->

    <!-- features_area_start  -->
    <div class="features_area" id="features">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>GIỚI THIỆU</h3>
                        <p>Phòng gym với thiết kế hiện đại,<br> phục vụ cho mọi đối tượng với trang thiết bị hiện đại, giáo trình tập chi tiết, hợp lý cùng với PT tận tình</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center mb-73">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h4>Cử tạ</h4>
                        <p>Có nhiều mức tạ phù hợp<br>cho từng đối tượng và các thiết bị hiện đại.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h4>Bài tập Cơ bắp</h4>
                        <p>PT tận tình hỗ trợ giúp bạn phát triển cơ báp<br>chỉ sau 2 tuần tập luyện</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h4>Cơ bắp Dẻo dai</h4>
                        <p>Bạn sẽ được phát triển cơ bắp một cách<br>toàn diện về cả chất và lượng</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="img/svg_icon/4.svg" alt="">
                        </div>
                        <h4>Các bài tập Cardio</h4>
                        <p>Các bài tập cường độ cao này sẽ giúp đốt cháy mở thừa<br>cơ thể và phát triển các cơ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end  -->

    <div class="offer_area offer_bg" id="sale">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="offer_text">
                        <h4>KHUYẾN MÃI KHỦNG HÈ NÀY</h4>
                        <h3>50% Off</h3>
                        <p>Nhân dịp hè về phòng gym tưng bừng tung ra gói khuyến mãi 50% cho tất cả các gói tập duy nhất trong hè này.</p>
                        <?php
                        if (isset($_SESSION['user_data'])) {
                            echo '<a href="#" class="boxed-btn3">Tham gia Ngay</a>';
                        } else {
                            echo '<a href="login.php" class="boxed-btn3">Vui lòng đăng nhập</a>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="priscing_area" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>CHI PHÍ CÁC GÓI</h3>
                        <p>Hiện tại phòng gym đang có các gói tập cơ bản để phù hợp với từng đối tượng</p>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['user_data'])) {
            ?>
                <form action="index.php" method="POST">
                    <div class="row">
                        <?php
                        $query  = "SELECT * FROM mem_types";
                        $result = mysqli_query($con, $query);
                        if (mysqli_affected_rows($con) != 0) {
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_prising text-center">
                                        <div class="prising_header">
                                            <input type="text" name="name_pri" class="name_pri" id="name_pri" value="<?php echo  $row['name'] . "/" . $row['id']; ?>" readonly style="display: block; margin: 0 auto; text-align: center; background-color: none; font-size: 23px;cursor: pointer;outline: none; "></input>
                                            <span><?php echo  $row['rate']; ?></span>
                                        </div>
                                        <div class="pricing_body">
                                            <ul>
                                                <li>
                                                    <h3 style="color: white;"><?php echo  $row['days']; ?> days</h3>
                                                </li>
                                                <li>Không giới hạn thời gian tập</li>
                                                <li class="off-color">Hướng dẫn tận tình</li>
                                                <li class="off-color">Hỗ trợ phòng tắm và thay đồ</li>
                                                <li class="off-color">Có huấn luyện viên riêng</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_btn">
                                            <button type="submit" name="send" class="boxed-btn3 join">Join Now</button>';
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>
                    </div>
                </form>
            <?php
            } else {
            ?>
                <div class="row">
                    <?php
                    $query  = "SELECT * FROM mem_types";
                    $result = mysqli_query($con, $query);
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_prising text-center">
                                    <div class="prising_header">
                                        <input type="text" name="name_pri" class="name_pri" id="name_pri" value="<?php echo  $row['name'] . "/" . $row['id']; ?>" readonly style="display: block; margin: 0 auto; text-align: center; background-color: none; font-size: 23px;cursor: pointer;outline: none; "></input>
                                        <span><?php echo  $row['rate']; ?></span>
                                    </div>
                                    <div class="pricing_body">
                                        <ul style="font-family: Tahoma, sans-serif ;">
                                            <li>
                                                <h3 style="color: white;"><?php echo  $row['days']; ?> days</h3>
                                            </li>
                                            <li>Không giới hạn thời gian tập</li>
                                            <li class="off-color">Hướng dẫn tận tình</li>
                                            <li class="off-color">Hỗ trợ phòng tắm và thay đồ</li>
                                            <li class="off-color">Có huấn luyện viên riêng</li>
                                        </ul>
                                    </div>
                                    <div class="pricing_btn">
                                        <a href="login.php" class="boxed-btn3">Login to Join</a>
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/1.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/2.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/3.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="img/gallery/3.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/4.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/5.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/6.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="img/gallery/6.png" alt="">
        </div>

    </div>
    <!-- gallery_area_end  -->
    <!-- team_area_start  -->
    <div class="team_area team_bg_1 overlay2" id="trainer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Huấn luyện viên</h3>
                        <p>Các huấn luyện viên kì cựu với nhiều năm kinh nghiệm sẽ hỗ trợ tận tình cho quá trình rèn dũa của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="img/team/1.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Jessica Mino</h3>
                            <p>Huấn luyện viên nữ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="img/team/2.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Amit Khan</h3>
                            <p>Huấn luyện viên nam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="img/team/3.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Paulo Rolac</h3>
                            <p>Huấn luyện viên nam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team_area_end  -->

    <!-- big_offer_area start  -->
    <div class="big_offer_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="offter_text">
                        <div class="container py-4">

                            <!-- Bootstrap 5 starter form -->
                            <form id="contactForm" style="background: rgba(225,225,225,0.5); padding: 40px 30px;" method="POST" action="index.php">

                                <!-- Name input -->
                                <div class="mb-3">
                                    <label class="form-label" for="name" style="color: white;">Name</label>
                                    <input class="form-control" id="name" name="name_mail" type="text" placeholder="Name" />
                                </div>

                                <!-- Email address input -->
                                <div class="mb-3">
                                    <label class="form-label" for="emailAddress" style="color: white;">Email Address</label>
                                    <input class="form-control" id="emailAddress" type="email" name="email_send" placeholder="Email Address" />
                                </div>

                                <!-- Message input -->
                                <div class="mb-3">
                                    <label class="form-label" for="message" style="color: white;">Message</label>
                                    <textarea class="form-control" id="message" type="text" placeholder="Message" name="mess_send" style="height: 10rem;" data-sb-validations="required"></textarea>
                                </div>

                                <!-- Form submit button -->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit" name="submitButton">Submit</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big_offer_area end  -->




    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="/img/dotchuoi2.png" alt="" width="150">
                                </a>
                            </div>
                            <p>Tầng 4 Nha Trang Center, 20 trần phú Nha Trang Khánh Hòa<br>
                                <a href="#">+84 935 96 9923</a> <br>
                                <a href="#">Califonia@gym.com</a>
                            </p>
                            <p>



                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul class="links">
                                <li><a href="#">Khuyễn Mãi</a></li>
                                <li><a href="#">Giới Thiệu</a></li>
                                <li><a href="#">Các gói tập</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

    <script>
        var list = document.getElementsByClassName("join");
        var doc = document.getElementsByClassName("name_pri");
        list.addEventListener("click", (e) => {
            console.log("Hello");
        })
    </script>
</body>

</html>