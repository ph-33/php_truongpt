<!DOCTYPE html>
<html>
<head>
    <title>Bai_2</title>
    <?php
    $agv = '';
    if(!isset($_POST['avg'])){
            $math = isset($_POST['math']) ? (float)trim($_POST['math']) : '';
            $phy = isset($_POST['physics']) ? (float)trim($_POST['physics']) : '';
            $che = isset($_POST['chemistry']) ? (float)trim($_POST['chemistry']) : '';
        }


    ?>
</head>
<body>
    <form method="get">
        <label>math</label>
        <input type="text" name="math">

        <label>physics</label>
        <input type="text" name="physics">

        <label>chemistry</label>
        <input type="text" name="chemistry">

        <input type="submit" name="avg" value="avg">

    </form>
    <?php
    $avg =($math+$phy+$che)/3;
    ?>
    <span>điểm trung bình: <?php echo $avg; ?></span>
    <span>xếp loại:
        <?php

        if ($avg>=8.0){
            echo 'A';
        }elseif ($avg>=6.5){
            echo 'B';
        }elseif ($avg>=5.0){
            echo 'C';
        }else{
            echo 'D';
        }
        ?>
    </span>

</body>
</html>
