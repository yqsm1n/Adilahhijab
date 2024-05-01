<?php
session_start();

if (!isset($_SESSION["email"]))
    header("location:login.php");

include '../condb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User จองสนาม</title>
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        .right-text {
            text-align: right;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body>

    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->


    <!-- Main wrapper start -->
    <div id="main-wrapper">

        <?php include '../header.php'; ?>
        <?php include '../sidebar.php'; ?>

        <!-- Content body start -->
        <div class="justify-content-center p-3">
            <div class="container">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>จองสนาม</h4>
                        </div>
                    </div>
                </div>

                <?php
                $ddt1 = @$_POST['dt1'];
                $ddt2 = @$_POST['dt2'];
                $add_date = date('Y/m/d', strtotime($ddt2 . "+1 days"));

                if (($ddt1 != "") & ($ddt2 != "")) {
                    echo "ค้นหาจากวันที่ $ddt1 ถึง $ddt2";
                    $query = "SELECT * FROM dt_time";
                } else {
                    $query = "SELECT * FROM dt_time";
                }

                $connection = mysqli_connect("localhost", "root", "", "yala_stadium");
                $query_run = mysqli_query($connection, $query);
                ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container mt-3">
                                    <form action="">
                                        <div class="row p-2">
                                            <div class="col-5">
                                                <label for="inputName" class="form-label" style="color: gray;">สถานะการจอง :</label><br>
                                                <a class="btn btn-success disabled">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                <h>ว่าง</h>
                                                <a class="btn btn-warning disabled">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                <h>อยู่ระหว่างตรวจสอบ</h>
                                                <a class="btn btn-danger disabled">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                <h>ไม่ว่าง</h>
                                                <div class="text-danger mt-2">
                                                    <h>**จองได้ครั้งละ 1 ช่วงเวลา</h>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <!-- <div class="col">
                                                    <label for="inputName" class="form-label" style="color: gray;">เลือกวันที่ :</label>
                                                    <select class="form-control" name="s_1" required>
                                                        <option value="" selected disabled>กรุณาเลือกเวลา</option>
                                                        <?php
                                                        // $sql = "SELECT * FROM dt_date";
                                                        // $result = mysqli_query($conn, $sql);
                                                        // if ($result) {
                                                        //     while ($row = mysqli_fetch_array($result)) {
                                                        //         echo '<option value="' . $row['d_id'] . '">' . $row['s_1'] . '</option>';
                                                        //     }
                                                        //     mysqli_free_result($result);
                                                        // }
                                                        ?>
                                                    </select>
                                                </div> -->
                                                <label for="inputName" class="form-label" style="color: gray;">เลือกวันที่ :</label>
                                                <!-- <input class="form-control" type="text" id="datepicker" value="<?= date("d-m-Y", strtotime(date('Y-m-d'))) ?>">
                                                <h>**สามารถจองล่วงหน้าได้ไม่เกิน 7 วัน</h>
                                                <script type="text/javascript" class="p-3">
                                                    var date_start = new Date();
                                                    date_start.setDate(date_start.getDate());
                                                    var date_end = new Date();
                                                    date_end.setDate(date_end.getDate() + 7);
                                                    $('#datepicker').datepicker({
                                                        format: 'dd-mm-yyyy',
                                                        language: 'th',
                                                        startDate: date_start,
                                                        endDate: date_end,
                                                    });
                                                </script> -->
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-2"></label>
                                                <div class="mt-1">
                                                    <!-- <input type="hidden" name="table_id" value="<?php echo $_GET['id']; ?>"> -->
                                                    <button type="submit" class="btn-primary py-2 px-5">ตกลง</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="my-2 text-primary">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <?php
                        $ddt1 = @$_POST['dt1'];
                        $ddt2 = @$_POST['dt2'];
                        $add_date = date('Y/m/d', strtotime($ddt2 . "+1 days"));

                        if (($ddt1 != "") & ($ddt2 != "")) {
                            echo "ค้นหาจากวันที่ $ddt1 ถึง $ddt2";
                            $query = "SELECT * FROM dt_time";
                        } else {
                            $query = "SELECT * FROM dt_time";
                        }

                        $connection = mysqli_connect("localhost", "root", "", "yala_stadium");
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <div class="row page-titles mx-0 py-5">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="d-flex">
                                        <?php
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                $status = $row['t_status'];

                                        ?>

                                                <?php
                                                if ($status == 0) {
                                                    echo '<div class="ms-1">';
                                                    echo '<a href="booking.php?id=' . $row["t_id"] . '&act=booking"class="btn-success m-1 py-2 px-2">' . $row['t_name'] . '</a></div>';
                                                } else if ($status == 1) {
                                                    echo '<div class="ms-1">';
                                                    echo '<h href="#" class=" btn-warning m-1 py-2 px-2 disabled">' . $row['t_name'] . '</h></div>';
                                                } else if ($status == 2) {
                                                    echo '<div class="ms-1">';
                                                    echo '<h href="#" class=" btn-danger m-1 py-2 px-2 disabled">' . $row['t_name'] . '</h></div>';
                                                }

                                                ?>
                                        <?php
                                            }
                                        } else {
                                            echo "No Record Found";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-validation">
                                            <form class="form-valide" action="insert_booking.php" method="post" enctype="multipart/form-data">
                                                <div class="row mt-3">
                                                    <div class="col-xl-4">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="name">สนาม
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <select class="form-control py-2" name="stadium" id="" required>
                                                                    <option value="สนาม1">สนามA</option>
                                                                    <option value="สนาม2">สนามB</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="name">ชื่อ
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="name" class="form-control py-2" value="<?php
                                                                                                                                if (isset($_SESSION["name"])) {
                                                                                                                                    echo $_SESSION["name"];
                                                                                                                                }
                                                                                                                                ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="phone">เวลาเริ่ม
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <input type="time" name="timer" class="form-control py-2" placeholder="โทรศัพท์" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="phone">เสื้อกั๊ก
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <select class="form-control py-2" name="shirt">
                                                                    <option value="ไม่เอา">เสื้อกั๊ก</option>
                                                                    <option value="1 ชุด">1 ทีม</option>
                                                                    <option value="2 ชุด">2 ทีม</option>
                                                                    <option value="3 ชุด">3 ทีม</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="file">สแกนมัดจำ
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <img class="card p-2" src="../../img/qr_code.jpg" width="90">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-8">
                                                                <button type="submit" name="submit" class="py-2 px-3 btn-primary"><i class="fa fa-cloud-download"></i> ยืนยัน </button>
                                                                <button type="cencel" name="cencel" class="py-2 px-3 btn-danger mx-1"><i class="fa fa-close"></i> ยกเลิก </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="name">วันที่
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="date" class="form-control py-2" id="datepicker" value="<?= date("d-m-Y", strtotime(date('Y-m-d'))) ?>">
                                                                <script type="text/javascript" class="p-3">
                                                                    var date_start = new Date();
                                                                    date_start.setDate(date_start.getDate());
                                                                    var date_end = new Date();
                                                                    date_end.setDate(date_end.getDate() + 7);
                                                                    $('#datepicker').datepicker({
                                                                        format: 'dd-mm-yyyy',
                                                                        language: 'th',
                                                                        startDate: date_start,
                                                                        endDate: date_end,
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="phone">เบอร์
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <input type="number" class="form-control py-2" id="phone" name="phone" value="<?php
                                                                                                                                                if (isset($_SESSION["name"])) {
                                                                                                                                                    echo $_SESSION["phone"];
                                                                                                                                                }
                                                                                                                                                ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="phone">เวลาสิ้นสุด
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <input type="time" name="times" class="form-control py-2" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="phone">เสื้อกั๊ก
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <select class="form-control py-2" name="water">
                                                                    <option value="ไม่เอา">น้ำเปล่า</option>
                                                                    <option value="1 แพ็ค">1 แพ็ค</option>
                                                                    <option value="2 แพ็ค">2 แพ็ค</option>
                                                                    <option value="3 แพ็ค">3 แพ็ค</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="file">แนบสลิป
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-8">
                                                                <input type="file" class="form-control" id="file" name="image" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <img src="images/logo.jpg" alt="" width="300">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content body end -->

                <!-- Footer start -->
                <?php include '../footer.php'; ?>
                <!-- Footer end -->

            </div>
            <!-- Main wrapper end -->
        </div>
</body>

</html>

<!-- คำสั่ง sweetalert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>