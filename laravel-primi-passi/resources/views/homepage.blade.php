<?php
$nome = 'Carmine';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <h1>Helloworld</h1>
    <p>io sono {{ $nome }}</p>
    <header>
        <ul>
            <li>
                <a href="/about.blade.php">ABOUT</a>
            </li>
            <li>
                <a href="/hello.blade.php">HI THERE</a>
            </li>
        </ul>
    </header>
</body>
</html>