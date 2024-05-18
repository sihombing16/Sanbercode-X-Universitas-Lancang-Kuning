<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h3>Soal No 1</h3>";

    $string = "PHP is never old";

    echo "Panjang string : " . strlen($string) . "<br>";
    echo "Jumlah kata : " . str_word_count($string) ."<br><br>";

    $first_sentence = "Hello PHP" ;

    echo "Panjang first_sentence : " . strlen($first_sentence) . "<br>";
    echo "Jumlah kata : " . str_word_count($first_sentence) ."<br><br>";

    $second_sentence = "I'm ready for the challenges";

    
    echo "Panjang second_sentence : " . strlen($second_sentence) . "<br>";
    echo "Jumlah kata : " . str_word_count($second_sentence) ."<br><br>";

    echo "<h3>Soal No 2</h3>";

    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;
    echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
    echo "Kata ketiga: " . substr($string2, 6, 4) . "<br>" ;

    echo "<h3>Soal No 3</h3>";

    $string3 = "PHP is old but sexy!";
        echo "String3 : ". $string3."<br>";
        echo "Ganti String3 : ". str_replace("sexy","awesome",$string3);
    ?>

</body>
</html>