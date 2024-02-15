<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1>My first PHP project</h1>
    </header>
    <?php
        $name = "Karin";
        $favFood = "hotpot";
        $age = 35;
        $pi = 3.14;
        $price = 2.99;
        $online = true;
        

        echo "<div class='message'> Welcome to my first PHP project! <br>";
        echo "<div class='message'> It is a great day to learn PHP! <br>";
        echo "<div class='message'>My name is {$name} and I am {$age} years old, my favorite food is {$favFood}. <br>";
        echo "<div class='message'>Pi is = {$pi}. <br>";
        echo "<div class='message'>\${$price} is a normal price for creme fraiche these days...<br>";
        echo "<div class='message'>Online status: {$online}.<br>";
    ?>
    <br>
    <button class="buttons">Click me!</button><br>
    <button class="buttons">Press me too!</button><br>
    <footer>
        <p>Created by: Karin Ekenberg</p>
    </footer>
</body>
</html>