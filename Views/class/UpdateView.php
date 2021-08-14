<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sửa ở đây</h1>
    <form action="../update-pro" method="post">
        Mã: <input type="text" readonly name="id-class" value="<?= $item->idClass ?>">
        <br>
        Tên : <input type="text" name="name-class" id="" value="<?= $item->nameClass ?>">
        <br>
        Khóa : <input type="text" name="couse" id="" value="<?= $item->Couse ?>">
        <br>
        <button>Cập nhập</button>
    </form>
</body>

</html>