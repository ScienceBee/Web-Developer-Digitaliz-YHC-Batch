<?php
$conn = mysqli_connect('localhost', 'root', '13052003', 'seleksi');
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="w-full bg-[#dbeafe] flex items-center justify-center">
        <div class="bg-white shadow-md rounded-md ">
            <div class="formbold-main-wrapper">
                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="formbold-form-wrapper">

                    <form action="" method="POST">
                        <div class="formbold-form-title">
                            <h2 class="text-center">INPUT DATA</h2>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="pname" class="formbold-form-label">
                                    Project name
                                </label>
                                <input type="text" name="pname" id="pname" class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="client" class="formbold-form-label"> Client name </label>
                                <input type="text" name="client" id="client" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="lname" class="formbold-form-label"> Leader name </label>
                                <input type="text" name="lname"  id="lname" class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="lemail" class="formbold-form-label"> Leader email </label>
                                <input type="email"  name="lemail" id="lemail" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-mb-3">
                            <label for="limg" class="formbold-form-label">
                                Leader URL Photo
                            </label>
                            <input type="text"  name="limg" id="limg" class="formbold-form-input" />
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="sdate" class="formbold-form-label"> Start date </label>
                                <input type="date"  name="sdate" id="sdate" class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="edate" class="formbold-form-label"> End date </label>
                                <input type="date" name="edate" id="edate" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-mb-3">
                            <label for="progress" class="formbold-form-label">
                                Progress
                            </label>
                            <input type="text"  name="progress" id="progress" class="formbold-form-input" />
                        </div>
                        <a href="index.php" class="bg-red-600 text-white py-4 px-5 rounded-md">KEMBALI</a>
                        <button class="formbold-btn" name="kirim" type="submit">INPUT</button>
                    </form>
                    <?php

                    if (isset($_POST['kirim'])) {
                        $project_name       = $_POST['pname'];
                        $client_name       = $_POST['client'];
                        $leader_name       = $_POST['lname'];
                        $leader_email       = $_POST['lemail'];
                        $leader_url       = $_POST['limg'];
                        $start_date       = $_POST['sdate'];
                        $start_date_formatted       = date("Y-m-d", strtotime($start_date));
                        $end_date      = $_POST['edate'];
                        $start_date_formatted       = date("Y-m-d", strtotime($end_date));
                        $progres = $_POST['progress'];
                        mysqli_query($conn, "INSERT INTO `proyek`(`project`, `client`, `leader_name`, `leader_email`, `leader_img`, `start_date`, `end_date`, `progress`) VALUES ('$project_name','$client_name','$leader_name','$leader_email','$leader_url','$start_date','$end_date','$progres')");
                        echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
                    }
                    ?>
                </div>
            </div>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    font-family: 'Inter', sans-serif;
                }

                .formbold-mb-3 {
                    margin-bottom: 15px;
                }

                .formbold-relative {
                    position: relative;
                }

                .formbold-opacity-0 {
                    opacity: 0;
                }

                .formbold-stroke-current {
                    stroke: currentColor;
                }

                #supportCheckbox:checked~div span {
                    opacity: 1;
                }

                .formbold-main-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 48px;
                }

                .formbold-form-wrapper {
                    margin: 0 auto;
                    max-width: 570px;
                    width: 100%;
                    background: white;
                    padding: 40px;
                }

                .formbold-img {
                    margin-bottom: 45px;
                }

                .formbold-form-title {
                    margin-bottom: 30px;
                }

                .formbold-form-title h2 {
                    font-weight: 600;
                    font-size: 28px;
                    line-height: 34px;
                    color: #07074d;
                }

                .formbold-form-title p {
                    font-size: 16px;
                    line-height: 24px;
                    color: #536387;
                    margin-top: 12px;
                }

                .formbold-input-flex {
                    display: flex;
                    gap: 20px;
                    margin-bottom: 15px;
                }

                .formbold-input-flex>div {
                    width: 50%;
                }

                .formbold-form-input {
                    text-align: center;
                    width: 100%;
                    padding: 13px 22px;
                    border-radius: 5px;
                    border: 1px solid #dde3ec;
                    background: #ffffff;
                    font-weight: 500;
                    font-size: 16px;
                    color: #536387;
                    outline: none;
                    resize: none;
                }

                .formbold-form-input:focus {
                    border-color: #6a64f1;
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }

                .formbold-form-label {
                    color: #536387;
                    font-size: 14px;
                    line-height: 24px;
                    display: block;
                    margin-bottom: 10px;
                }

                .formbold-checkbox-label {
                    display: flex;
                    cursor: pointer;
                    user-select: none;
                    font-size: 16px;
                    line-height: 24px;
                    color: #536387;
                }

                .formbold-checkbox-label a {
                    margin-left: 5px;
                    color: #6a64f1;
                }

                .formbold-input-checkbox {
                    position: absolute;
                    width: 1px;
                    height: 1px;
                    padding: 0;
                    margin: -1px;
                    overflow: hidden;
                    clip: rect(0, 0, 0, 0);
                    white-space: nowrap;
                    border-width: 0;
                }

                .formbold-checkbox-inner {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 20px;
                    height: 20px;
                    margin-right: 16px;
                    margin-top: 2px;
                    border: 0.7px solid #dde3ec;
                    border-radius: 3px;
                }

                .formbold-btn {
                    font-size: 16px;
                    border-radius: 5px;
                    padding: 14px 25px;
                    border: none;
                    font-weight: 500;
                    background-color: #6a64f1;
                    color: white;
                    cursor: pointer;
                    margin-top: 25px;
                }


                .formbold-btn:hover {
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }
            </style>
        </div>
    </div>
</body>

</html>