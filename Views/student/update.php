<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php print_r($listClass); ?> -->
    <h2>Sửa điiii</h2>
    <form action="?controller=student&action=updatepro" method="post">
        id : <input type="text" name="idStudent" id="" readonly value="<?= $item->idStudent ?>"><br>
        Họ: <input type="text" name="firstName" id="" value="<?= $item->firstName ?>"><br>
        Tên: <input type="text" name="lastName" id="" value="<?= $item->lastName ?>"><br>
        Giới tính: <input type="radio" name="gender" id="" value="1" <?= $item->gender == 1 ? "checked" : "" ?>>Nams
        <input type="radio" name="gender" id="" value="0" <?= $item->gender == 0 ? "checked" : "" ?>>Nữ<br>
        Ngày sinh: <input type="date" name="DoB" id="" value="<?= $item->DoB ?>"><br>
        Lớp: <select name="class">
            <?php foreach ($listClass as $class) :

            ?>
                <option value="<?= $class->idClass ?>" <?= $item->class->idClass == $class->idClass ? "selected" : "" ?>>
                    <?= $class->nameClass . "K" . $class->Couse ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button>UPDATE</button>

</html>