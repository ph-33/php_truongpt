<!DOCTYPE html>
<html>
<head>
    <title>in tam giac *</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if (isset($_POST['print']))
    {
        $n = $_POST['n'];
    }
    ?>
    <form method="post" action="">
        <label>Nhập số nguyên n: </label>
        <input type="text" name="n">

        <input type="submit" name="print" value="In">
    </form>
    <?php
    for($i = 1 ; $i <= $n ; $i++) {
        for($j = 0 ; $j < $i ; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>


</body>
</html>