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


    <?php echo var_dump($student);

    foreach ($student as $key) {
        echo $key['firstname'] . "<br>";
    }

    ?>


    <form action="<?php echo base_url(); ?>index.php/form/loadStudent" method="post">
        <button type="submit" class="btn btn-outline-success">เพิ่มนักศึกษา</button>
    </form>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">รหัสนิสิต</th>
                <th scope="col">ชื่อ - สกุล</th>
                <th scope="col">วันที่ลงประทับ</th>
                <th scope="col">เมนู</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($student as $key=>$value) {
                ?>
                <tr>
                    <th scope="row"><?php echo $key['id'] ?></th>
                    <td><?php echo $value['id_stu'] ?></td>
                    <td><?php echo $value['prefixname'] . " " . $value['firstname'] . "    " . $value['lastname'] ?></td>
                    <td><?php echo $value['stampdate'] ?></td>
                    <td><button type="button" class="btn btn-outline-danger">แก้ไข</button></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</body>

</html>