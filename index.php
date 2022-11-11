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
    <form action="result.php" method="POST">
        <div class="container">
            <h1>Выберите количество костей</h1>
            <input type="number" name="number" value="1" min="1" max="100000">
        </div>
        <div class="container">
            <h1>Выберите количество сторон у одной кости</h1>
            <select name="sides" id="sides">
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="20">20</option>
            </select>
        </div>
        <input type="submit" value="Бросить кости">
    </form>
</body>

</html>