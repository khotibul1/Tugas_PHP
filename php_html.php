<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi</title>
</head>
<body>
    <P>Perulangan Bilangan Genap 100-0</p>
    <?php
    $i = 100;
    while ($i >= 0){
        echo "$i";
        echo "<br/>";
        $i-=2;
    }
    ?> 
    <p>Menampilkan Bilangan Yang Mempunyai Angka 8</p>
<?php
for($i=8; $i <= 100; $i=$i+10){
    echo $i;
    echo "<br/>";
}
    ?>

</body>
</html>
