<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Dev</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>\assets\bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <script src="<?php echo base_url(); ?>\assets\bootstrap-4.3.1-dist\js\bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="<?php echo base_url(); ?>\assets\jquery-3.4.1.min\jquery-3.4.1.min.js"></script>

</head>

<body>

    <?php echo var_dump($student) . "<hr>";

    foreach ($student as $key) {
        $student['id']  = $key['id'];
        $student['prefixname']  = $key['prefixname'];
        $student['firstname']  = $key['firstname'];
        $student['lastname']  = $key['lastname'];
        $student['id_stu']  = $key['id_stu'];
        $student['code']  = $key['id_stu'];
        $student['fly']  = $key['fly'];
        $student['shoot']  = $key['shoot'];
        $student['stampdate']  = $key['stampdate'];
    }

    echo $student['prefixname'] . "<hr>";

    ?>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <form class="col-9" action="<?php echo base_url(); ?>index.php/form/showStudent" method="post">
                <a class="navbar-brand">ระบบฟอร์มนักศึกษา</a>
                <button type="submit" class="btn btn-outline-info" name="loadStudent" value="load">ดูนักศึกษา</button>
            </form>
            <form class="form-inline col-3">
                <input class="form-control mr-sm-2" type="search" placeholder="สืบค้นข้อมูล" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
            </form>
        </nav>
        <div class="row">

            <div class="col-12">
                <div class="stu-form">
                    <h1>แบบฟอร์มแก้ไขข้อมูลนักศึกษา</h1>
                    <form action="<?php echo base_url(); ?>index.php/form/updateStudent" method="post">
                        <div class="form-group">
                            <span>คำนำหน้าชื่อ : </span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prefixname" id="exampleRadios1" value="เด็กชาย" <?php
                                                                                                                                    if ($student['prefixname'] == "เด็กชาย") {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                    ?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    เด็กชาย
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prefixname" id="exampleRadios1" value="เด็กหญิง" <?php
                                                                                                                                    if ($student['prefixname'] == "เด็กหญิง") {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                    ?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    เด็กหญิง
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prefixname" id="exampleRadios1" value="นาย" <?php
                                                                                                                                if ($student['prefixname'] == "นาย") {
                                                                                                                                    echo "checked";
                                                                                                                                }
                                                                                                                                ?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    นาย
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prefixname" id="exampleRadios1" value="นางสาว" <?php
                                                                                                                                    if ($student['prefixname'] == "นางสาว") {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                    ?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    นางสาว
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <div class="input-group col-12">

                                <div class="input-group-prepend">
                                    <input type="hidden" name="id" value="<?php echo $student['id']; ?>" />
                                    <span class="input-group-text" id="basic-addon1"><?php echo $student['id']; ?></span>
                                </div>

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ชื่อจริง</span>
                                </div>
                                <input name="firstname" type="text" class="form-control" placeholder="<?php echo $student['firstname']; ?>" aria-label="Username" aria-describedby="basic-addon1">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">นามสกุล</span>
                                </div>
                                <input name="lastname" type="text" class="form-control" placeholder="<?php echo $student['lastname']; ?>" aria-label="Username" aria-describedby="basic-addon1">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">รหัสนิสิต</span>
                                </div>
                                <input name="idstudent" type="text" class="form-control" placeholder="<?php echo $student['id_stu']; ?>" aria-label="Username" aria-describedby="basic-addon1">

                            </div>
                        </div>
                        <div class="form-group">
                            <span>ความสามารถพิเศษ : </span>
                            <div class="form-check form-check-inline">
                                <input name="code" type="checkbox" class="form-check-input" id="exampleCheck1" value="1" <?php
                                                                                                                            if ($student['code'] == "1") {
                                                                                                                                echo "checked";
                                                                                                                            }
                                                                                                                            ?>>
                                <label class="form-check-label" for="exampleCheck1">เขียนโปรแกรม</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="fly" type="checkbox" class="form-check-input" id="exampleCheck1" value="1" <?php
                                                                                                                        if ($student['fly'] == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                                <label class="form-check-label" for="exampleCheck1">ขับเครื่องบิน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="shoot" type="checkbox" class="form-check-input" id="exampleCheck1" value="1" <?php
                                                                                                                            if ($student['shoot'] == "1") {
                                                                                                                                echo "checked";
                                                                                                                            }
                                                                                                                            ?>>
                                <label class="form-check-label" for="exampleCheck1">ยิงปืน</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <span>วันที่บันทึกข้อมูล : </span>
                            <input type="date" name="date" value="<?php echo $student['stampdate']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">อัพเดทข้อมูล</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>