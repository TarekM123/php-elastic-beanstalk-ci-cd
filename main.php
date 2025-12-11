<?php
include('save.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MAIN PAGE:</h1>

    <p><a href="room.php"><button>ADD ROOM</button></a></p>
    <p><a href="client.php"><button>ADD CLIENT</button></a></p>
    <p><a href="viewall.php"><button>VIEW AAL RESERVATIONS</button></a></p>
</body>
</html>
<style>
   
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}


button:hover {
    background-color:#45a049;
}


p {
    text-align: center;
    margin: 10px;
}


@media (max-width: 600px) {
    h1 {
        font-size: 24px;
    }

    button {
        width: 100%;
        font-size: 18px;
        padding: 15px;
    }
}

</style>