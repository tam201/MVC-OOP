<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>danh sách lớp</h1>
    <a href="class/insert">Thêm lớp</a>
    <table border="1">
        <tr>
            <th>Mã lớp</th>
            <th>Tên lớp</th>
            <th>Khóa</th>
            <th colspan="3"></th>

        </tr>
        <?php foreach ($listClass as $class) :
            // print_r($result);

        ?>
            <tr>
                <td><?= $class->idClass ?></td>
                <td><?= $class->nameClass ?></td>
                <td><?= $class->Couse ?></td>

                <td><a href="class/update/<?= $class->idClass  ?>">Sửa</a></td>
                <td><a href="class/delete-pro/<?= $class->idClass  ?>" onclick=" return confirm('Bạn có muốn xóa không')">Delete</a></td>

            </tr>
        <?php endforeach ?>
    </table>
    <a href="javascript:history.back()"><u>Quay lại</u></a>
</body>

</html>