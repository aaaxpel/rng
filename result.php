<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    <?php include "style.css" ?>
</style>

<body>
    <div class="container">
        <?php

        echo "<h1>Количество брошенных костей: <strong>" . $_POST['number'] . "</strong></h1>";
        echo "<h1>Количество сторон костей: <strong>" . $_POST['sides'] . "</strong></h1>";

        ?>
    </div>

    <div class="container">
        <?php
        $result = array();

        for ($i = 1; $i <= $_POST['number']; $i++) {
            array_push($result, rand(1, $_POST['sides']));
        }
        $summ = 0;
        foreach ($result as $item) {
            $summ += $item;
        }
        echo "<h1>Сумма всех граней: <strong>" . $summ . "</strong></h1>";

        ?>


        <div class="items">
            <?php
            foreach ($result as $key => $item) {
                echo '<div class="item"><h1 style="opacity: 75%;" title="Выпавшая грань">' . $item . '</h1><p title="Номер кости">' . ($key + 1) . '</p></div>';
            }

            ?>
        </div>
    </div>

</body>

</html>