<?php
    $ProductName = "H20 Smart Watch";
    $ProductPrice = 4200;
    $ProductDescription = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quibusdam voluptatum repellat perspiciatis molestias facere modi distinctio illum recusandae dolorum cupiditate reiciendis tempore et, doloremque vero eum omnis, facilis quaerat!";

    $ProductkaNaam=["T900Ultra","T800Ultra","DT900","HW9ProMax"];
    $ProductkiPrice=["4200","4110","6320","3113"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php ka Kaam</title>
</head>
<body>
    <style>
        .container{
            height: 300px;
            width:275px;
            border:1px solid black;
        }
        .box{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    </style>
    <div class="box">
    <?php
    for($i=0; $i<4; $i++){
?> 
        <div class="container">
            <h1><?php echo "$ProductkaNaam[$i]"?></h1>
            <p><?php echo " $ProductkiPrice[$i]" ?></p>
            <p><?php echo " $ProductDescription" ?></p>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>