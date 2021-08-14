<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>danh sách sinh viên nè</h1>
    <!-- <?php print_r($listClass); ?> -->
    <a href="?controller=student&action=create">Thêm</a>
    <table border="1">
        <tr>
            <th>Mã sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Gender</th>
            <th>DoB</th>
            <th>Tên lớp</th>
            <th colspan="3"></th>
        </tr>
        <?php foreach ($listClass as $student) : ?>


            <tr>
                <td><?= $student->idStudent ?></td>
                <td><?= $student->firstName . " " . $student->lastName ?></td>
                <td><?= $student->gender == 1 ? "Nam" : "Nữ" ?></td>
                <td><?= $student->DoB ?></td>
                <td><?= $student->class->nameClass . "K" . $student->class->Couse  ?></td>
                <td><a href="?controller=student&action=update&id=<?= $student->idStudent ?>">Sửa</a></td>
                <td><a href="?controller=student&action=delete&id=<?= $student->idStudent ?>" onclick=" return confirm('Bạn có muốn xóa không')">Xóa</td>

            </tr>
        <?php endforeach ?>

    </table>
    <a href="javascript:history.back()"><u>Quay lại</u></a>
</body>

</html>