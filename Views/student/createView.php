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
    <h1>Thêm sinhvieen nè</h1>
    <form action="?controller=student&action=createpro" method="post">
        Ho : <input type="text" name="firstName" id=""><br>
        ten : <input type="text" name="lastName" id=""><br>
        gender :<input type="radio" name="gender" id="" value="1">Nam
        <input type="radio" name="gender" id="" value="0">Nu<br>
        DoB :<input type="date" name="DoB" id=""><br>
        Lop :
        <select name="class">
            <?php foreach ($listClass as $class) : ?>
                <option value="<?= $class->idClass ?>">
                    <?= $class->nameClass . "k" . $class->Couse ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <br>
        <br>




        <button>Them ne</button>
        <a href="?controller=student">trang chủ</a>
    </form>
</body>

</html>