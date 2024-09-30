<?php
include "orang.php";
include "visibility.php";
include "nilai.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
</head>
<body>
    <h1>Praktikum 2</h1>
    <div>
        <?php
            $farhan = new orang();
            $farhan->nama = " M Farhan Ramadhan";

            $farhan->ucapsalam();

            echo "<br>";

            $emely = new orang();
            $emely->nama = " Emely Walker";
            $emely->ucapsalam();

            echo "<br>";

            $visibility = new visibility();
            $visibility->tampilkanproperty();

            echo "ini akses di luar kelas";
            echo " public : " . $visibility->public . '<br>';
            //echo "protected : " . $visibility->protected . '<br>';
            //echo "private : " . $visibility->private . '<br>';

            echo "<br> <br>";

            echo "Nilai MK Pemograman Web: <br>";
            $nilai = new Nilai();
            $nilai->setTugas(79);
            $nilai->setUts(90);
            $nilai->setUas(89);

            echo "Nilai UTS : " . $nilai->getUts() . "<br>";
            echo "Nilai UAS : " . $nilai->getUas() . "<br>";
            echo "Nilai Tugas : " . $nilai->getTugas() . "<br>";
            echo "Total Nilai : " . $nilai->hitungTotal() . "<br>";
        ?>
    </div>
</body>
</html>