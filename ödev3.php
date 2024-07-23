<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayı Kontrolü</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Bir sayı girin:</label>
        <input type="number" id="number" name="number">
        <input type="submit" value="Kontrol Et">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $number = $_POST["number"];

        if(empty($number)) {
            echo "Lütfen bir sayı girin.";
        } else {
            if ($number % 3 == 0){
                echo "Girdiğiniz sayı 3 ile bölünebilir.";
            } else {
                $nextDivisible = $number + (3 - ($number % 3));
                echo "Girdiğiniz sayı 3 ile bölünemez. Bölünebilen ilk sayı $nextDivisible'dir.";
            }
        }
    }
    ?>

</body>
</html>